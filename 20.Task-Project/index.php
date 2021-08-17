<?php
include_once "config.php";
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    throw new Exception( "Cannot connect to the database" );
}

$query  = "SELECT * FROM tasks WHERE complete = 0 ORDER BY date";
$result = mysqli_query( $connection, $query );

$completeTasksQuery  = "SELECT * FROM tasks WHERE complete = 1 ORDER BY date";
$resultCompleteTasks = mysqli_query( $connection, $completeTasksQuery );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo/Tasks</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
    body {
        margin-top: 30px;
    }

    #main {
        padding: 0px 150px 0px 150px;
        ;
    }

    #action {
        width: 150px;
    }

    </style>
</head>

<body>
    <div class="container" id="main">
        <h1>Tasks Manager</h1>
        <p>This is a sample project for managing our daily tasks. We're going to use HTML, CSS, PHP, JavaScript and
            MySQL for this project</p>

        <!-- Block for Completed Task -->
        <?php
if ( mysqli_num_rows( $resultCompleteTasks ) == 0 ) {
    ?>
        <p>No Completed Task Yet</p>
        <?php
} else {
    ?>
        <h4>Complete Tasks</h4>
        <form action="tasks.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
while ( $cdata = mysqli_fetch_assoc( $resultCompleteTasks ) ) {
        $timeStamp = strtotime( $cdata['date'] );
        $ctime     = date( "jS M, Y", $timeStamp );
        ?>
                    <tr>
                        <td><input class="label-inline" type="checkbox" value="<?php echo $cdata['id']; ?>"></td>
                        <td><?php echo $cdata['id']; ?></td>
                        <td><?php echo $cdata['task']; ?></td>
                        <td><?php echo $ctime; ?></td>
                        <td><a class="delete" data-taskid="<?php echo $cdata['id']; ?>" href="#">Delete</a> | <a
                                class="incomplete" data-taskid="<?php echo $cdata['id']; ?>" href="#">Mark
                                Incomplete</a>
                        </td>
                    </tr>
                    <?php
}
    mysqli_close( $connection );
    ?>
                </tbody>
            </table>
            <p>..................</p>
            <?php
}
?>

            <!-- Block for Upcoming Task -->
            <?php
if ( mysqli_num_rows( $result ) == 0 ) {
    ?>
            <p>No Upcoming Task Found</p>
            <?php
} else {
    ?>
            <h4>Upcoming Tasks</h4>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
while ( $data = mysqli_fetch_assoc( $result ) ) {
        $timeStamp = strtotime( $data['date'] );
        $time      = date( "jS M, Y", $timeStamp );
        ?>
                    <tr>
                        <td><input name="taskids[]" class="label-inline" type="checkbox"
                                value="<?php echo $data['id']; ?>"></td>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['task']; ?></td>
                        <td><?php echo $time; ?></td>
                        <td><a class="delete" data-taskid="<?php echo $data['id']; ?>" href="#">Delete</a> | <a
                                class="complete" data-taskid="<?php echo $data['id']; ?>" href="#">Complete</a></td>
                    </tr>
                    <?php
}
    mysqli_close( $connection );
    ?>
                </tbody>
            </table>

            <select id="action" name="action">
                <option value="0">With Selected</option>
                <option value="bulkdelete">Delete</option>
                <option value="bulkcomplete">Mark As Complete</option>
            </select>

            <input class="button-primary" id="bulksubmit" type="submit" value="submit">
        </form>
        <?php
}
?>
        <p>..................</p>
        <h4>Add Tasks</h4>

        <form action="tasks.php" method="POST">
            <fieldset>

                <?php $added = $_GET['added'] ?? '';?>
                <?php if ( $added ) {echo "<blockquote style='background-color: yellowgreen; color: black;'>Task successfully Added</blockquote>";}?>
                <label for="task">Task</label>
                <input type="text" placeholder="Task Details" id="task" name="task">
                <label for="date">Date</label>
                <input type="text" placeholder="Task Date" id="date" name="date">

                <input class="button-primary" type="submit" value="Add Task">

                <input type="hidden" name="action" value="add">
            </fieldset>
        </form>
    </div>
    <form action="tasks.php" method="POST" id="completeform">
        <input type="hidden" name="action" value="complete">
        <input type="hidden" id="taskid" name="taskid">
    </form>

    <form action="tasks.php" method="POST" id="deleteform">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" id="dtaskid" name="taskid">
    </form>

    <form action="tasks.php" method="POST" id="incompleteform">
        <input type="hidden" name="action" value="incomplete">
        <input type="hidden" id="itaskid" name="taskid">
    </form>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

<script>
;
(function($) {
    $(document).ready(function() {
        $(".complete").on("click", function() {
            var id = $(this).data("taskid");
            $("#taskid").val(id);
            $("#completeform").submit();
        });

        $(".delete").on("click", function() {
            if (confirm("Are you sure to delete this task?")) {
                var id = $(this).data("taskid");
                $("#dtaskid").val(id);
                $("#deleteform").submit();
            }
        });

        $(".incomplete").on("click", function() {
            var id = $(this).data("taskid");
            $("#itaskid").val(id);
            $("#incompleteform").submit();
        });

        $("#bulksubmit").on("click", function() {
            if ($("#action").val() == "bulkdelete") {
                if (!confirm("Are you sure to delete these tasks.")) {
                    return false;
                }
            }
        })
    });
})(jQuery);
</script>

</html>
