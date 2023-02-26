<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="JQuary/jquery.js"> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- <img src="img/IMG_2403.jpg" width="460" height="345">    -->
        <?php
            if ( isset( $_FILES['fupload'] ) ) {

                    print "name: ".     $_FILES['fupload']['name']       ."<br />";
                    print "size: ".     $_FILES['fupload']['size'] ." bytes<br />";
                    print "temp name: ".$_FILES['fupload']['tmp_name']   ."<br />";
                    print "type: ".     $_FILES['fupload']['type']       ."<br />";
                    print "error: ".    $_FILES['fupload']['error']      ."<br />";
                    $targetx = "C:/Server/data/htdocs/mg";
                    if ( $_FILES['fupload']['type'] == "image/jpg" ) {

                        $source = $_FILES['fupload']['tmp_name'];
                        $target = $targetx . $_FILES['fupload']['name'];   
                        //$target = $target . basename($_FILES['fupload']['name']);                      
                        move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                        $size = getImageSize( $target );

                        $imgstr = "<p><img width=\"$size[0]\" height=\"$size[1]\" ";
                        $imgstr .= "src=\"$target\" alt=\"uploaded image\" /></p>";

                        print $imgstr;
                    }
                }
                ?>
            <form enctype="multipart/form-data"
                    action="<?php print $_SERVER['PHP_SELF']?>" method="post">
                    <p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="102400" />
                    <input type="file" name="fupload" /><br/>
                    <input type="submit" value="upload!" />
                    </p>
        </form>
    </body>
</html>