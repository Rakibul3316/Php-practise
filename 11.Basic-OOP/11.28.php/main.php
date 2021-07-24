<?php
namespace CloudStorage;
include 'autoloader.php'; // এটা পরিবর্তে আমরা spl_autoload_register() ফাংশনটা ব্যবহার করবো।

use \CloudStorage\FileSystem\Files\Images\Jpeg;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\Mail\Mailer;

class Main {
    function __construct() {
        $mailer = new Mailer();
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        $jpeg = new Jpeg();
        echo $jpeg->getDimension();
    }
}

new Main();
