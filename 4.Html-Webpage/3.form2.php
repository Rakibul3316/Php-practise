<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Lesson-04</title>
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"
    />

    <!-- CSS Reset -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"
    />

    <!-- Milligram CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="column column-60 column-offset-20">
          <h1>Input sanitization</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro,
            blanditiis excepturi. Necessitatibus, repellendus error laboriosam.
          </p>
          <p>
            <?php
            $fname = '';
            $lname = '';
            ?>

            <!-- isset($_REQUEST['fname']) &&  -->

            <?php if(!empty($_REQUEST['fname'])){
                // $fname = htmlspecialchars($_REQUEST['fname']);
                // $fname = filter_input(INPUT_GET,'fname',FILTER_SANITIZE_STRING);
                $fname = $_REQUEST['fname'];
            } ?>

            <!-- sanitization -->
            <!-- htmlspecialchars,  -->

            <?php if(!empty($_REQUEST['lname'])){
                // $lname = htmlspecialchars($_REQUEST['lname']);
                // $lname = filter_input(INPUT_GET,'lname',FILTER_SANITIZE_STRING);
                $lname = $_REQUEST['lname'];
            } ?>
          </p>

          <p>
            First Name: <?php echo $fname ?> <br/>
            Last Name: <?php echo $lname ?> <br/>
          </p>


        </div>
      </div>
      <div class="row">
          <div class="column column-60 column-offset-20">
              <form method='GET'>
                  <label for="fname">First name</label>
                  <input type="text" name='fname' id='fname' value= <?php echo $fname ?> >

                  <label for="lname">Last name</label>
                  <input type="text" name='lname' id='lname' value= <?php echo $lname ?> >

                  <button type="submit">Submit</button>
              </form>
          </div>
      </div>
    </div>
  </body>
</html>