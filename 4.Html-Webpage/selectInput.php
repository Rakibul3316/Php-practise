<?php
include_once 'function-select-input.php';
$fruits = ['mango','Banana','apple','lemon','pineapple'];
?>

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
          <h1>Select Input</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro,
            blanditiis excepturi. Necessitatibus, repellendus error laboriosam.
          </p>

          <p>

            <?php
              // $selected__fruites = $_POST['fruits'];

              // FILTER_REQUIRE_ARRAY is used for array type;

              $selected__fruites = filter_input(INPUT_POST, 'fruits',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

              if(count($selected__fruites)>0){
                echo 'You hava selected: '.join(', ',$selected__fruites);
              }
            ?>

            <?php
                // if(isset($_POST['fruits']) && $_POST['fruits'] != '') {
                    // printf("Your selected fruit: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
                // }
            ?>

          </p>
        </div>
      </div>
      <div class="row">
          <div class="column column-60 column-offset-20">
            <form method="POST">
              <label for="fruits">Select Some Fruits</label>
              <select style='height:200px' name="fruits[]" id="fruits" multiple>
                <option value="" disabled selected>Select Some Fruits</option>
                <!-- <option value="mango">Mango</option>
                <option value="orange">Orange</option>
                <option value="banana">Banana</option> -->
                <?php displayOption($fruits, $selected__fruites); ?>
              </select>

              <button type="submit">Submit</button>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>

