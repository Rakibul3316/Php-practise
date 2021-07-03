<?php
include_once 'scrambler-function.php';

$task = 'encode';

if(isset($_GET['task']) && $_GET['task'] != ''){
    $task = $_GET['task'];
}



$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if('key' == $task){
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join( '', $key_original );
} else if(isset($_POST['key']) && $_POST['key'] != ''){
    $key = $_POST['key'];
}

if('encode' == $task ){
    $data = strtolower($_POST['data']) ?? '';
    if($data != ''){
        $scrambledData = scrambleData($data, $key);
    }
}

if ( 'decode' == $task ) {
    $data = $_POST['data'] ?? '';
    if ( $data != '' ) {
        $scrambledData = decodeData( $data, $key );
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Scrambler</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }

        #data {
            width: 100%;
            height: 160px;
        }

        #result {
            width: 100%;
            height: 160px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Data Scrambler</h2>
                <p>Use this application to scramble your data</p>
                <p>
                    <a href="/index.php?task=encode">Encode</a> |
                    <a href="/index.php?task=decode">Decode</a> |
                    <a href="/index.php?task=key">Generate Key</a>
                </p>

                <p>
                <?php
                    print_r($_GET['task']);
                ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" action="index.php<?php if ( 'decode' == $task ) {echo '?task=decode';}?>">
                <label for="key">Key</label>
                <input type="text" id="key" name="key" <?php display($key) ?> >
                <label for="data">Data</label>
                <textarea name="data" id="data"><?php if(isset($_POST['data'])) {echo $_POST['data'];} ?></textarea>
                <label for="result">Result</label>
                <textarea id="result"><?php echo $scrambledData; ?></textarea>
                <button type="submit">Do It For Me</button>
            </form>
        </div>
    </div>
</body>
</html>