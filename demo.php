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


        <h4>Complete Tasks</h4>

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
                <tr>
                    <td><input class="label-inline" type="checkbox"></td>
                    <td>1</td>
                    <td>Bring medicine for dad</td>
                    <td>18th May, 2019</td>
                    <td><a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Complete</a></td>
                </tr>

                <tr>
                    <td><input class="label-inline" type="checkbox"></td>
                    <td>1</td>
                    <td>Bring medicine for dad</td>
                    <td>18th May, 2019</td>
                    <td><a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Complete</a></td>
                </tr>
            </tbody>
        </table>

        <select id="action" name="action">
            <option value="0">With Selected</option>
            <option value="bulkdelete">Delete</option>
            <option value="bulkcomplete">Mark As Complete</option>
        </select>

        <input class="button-primary" type="submit">

        <p>...</p>
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
</body>

</html>
