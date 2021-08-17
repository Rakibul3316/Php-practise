<?php

/*
O => Open / Close Principle => Open for extension & close for modification.
(যখন একটা ক্লাস লিখবো এবং ক্লাসটা ঠিকমত রান করছে তখন এর মধ্যে যদি কোন অতিরিক্ত কোন ফিচার দরকার হয় তাহরে ক্লসের কোড কোন পরিবর্তন করা যাবে না। );
 */

class FileDisplay {
    function display( $file, $fileType ) {
        if ( "mp4" == $fileType ) {
            // display video player;
        } elseif ( "mp3" == $fileType ) {
            // display audio palyer;
        } elseif ( "jpg" == $fileType ) { // এই অংশটা আমাদের মডিফাই করা লাগছে।
            // display image file;
        } else {
            // display text file;
        }
    }
}

// এখন যদি এখানে image type এর ফাইল বা যেকোন ধরণের ফাইল display করাতে হয় তাহলে আমাদের এই কোডে modify করা লাগবে। কিন্তু এটা করা যাবে না।

class FileDispaly {
    function display( FileInterface $file ) {
        $file->display();
    }
}

interface FileInterface {
    function display();
}

class ImageFile implements FileInterface {
    function display() {
        // take necessary steps to display image;
    }
}

class VedioFile implements FileInterface {
    function display() {
        // take necessary steps to display vedio;
    }
}

class AudioFile implements FileInterface {
    function display() {
        // take necessary steps to display audio;
    }
}

$image = new ImageFile( "abcd.png" );
$vedio = new VedioFile( "abcd.mp4" );
$audio = new VedioFile( "abcd.mp3" );
$fd    = new FileDispaly();
$fd->display( $image );
$fd->display( $vedio );
$fd->display( $audio );

// এখানে আমাদের যত ইচ্ছা নতুন ফাইল এড করতে পারবো কিন্তু আমাদের মেইন ক্লাসে (FileDispaly) কোন হাত দেওয়া লাগবে না।
