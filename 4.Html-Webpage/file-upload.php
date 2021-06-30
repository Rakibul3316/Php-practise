<?php
if($_FILES['photo']) {
    move_uploaded_file($_FILES['photo']['tmp_name'],'./files/image.png');
}
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
          <h1>Upload File</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro,
            blanditiis excepturi. Necessitatibus, repellendus error laboriosam.
          </p>

          <pre>
            <p>
                <?php
                    print_r($_POST);
                    print_r($_FILES);
                ?>
            </p>
          </pre>
        </div>
      </div>
      <div class="row">
          <div class="column column-60 column-offset-20">
            <form method='POST' enctype='multipart/form-data'>
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname">

                <label for="lname">Last name</label>
                <input type="text" name="lname" id="lname">

                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo">

                <button type="submit">Submit</button>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>

