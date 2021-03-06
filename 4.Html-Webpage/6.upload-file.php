<?php
    $allowed__Image = [
        'image/png',
        'image/jpg',
        'image/jpeg',
    ];

    print_r( $allowed__Image );
    if ( $_FILES['photo'] ) {
        if ( in_array( $_FILES['photo']['type'], $allowed__Image ) !== false ) {
            move_uploaded_file( $_FILES['photo']['tmp_name'], './files/' . $_FILES['photo']['name'] );
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html Webpage</title>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Upload files</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi pariatur expedita tenetur delectus.</p>

                <pre>
                    <p>
                        <?php
                            print_r( $_POST );
                            print_r( $_FILES );
                        ?>
                    </p>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" enctype='multipart/form-data'>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <label for="photo">Upload Photo</label>
                    <input type="file" name="photo" id="photo"><br/>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>