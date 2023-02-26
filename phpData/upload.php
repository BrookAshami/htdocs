<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>File Upload Form </title>
        <style type="text/css">
            .img-box{
                display: inline-block;
                text-align: center;
                margin: 0 15px;
            }
         </style>
    </head>
    <body>
        <form action="upload-manager.php" method="post" enctype="multipart/form-data">
            <h2> Upload Files </h2>
            <label for="fileSelect"> File Name</label>
            <input type="file" name="photo" id="fileSelect">
            <input type="submit" name="submit" value="upload">
            <p> <strong> Note:</strong> only .jpeg .gif .png formats allowed to a max size of 5 MB. </p>
        </form>
         <?php 
             echo '<h2> Simple Image Gallery </h2>';
             $images = array("tersit.jpg", "chania.jpg");
             foreach($images as $image){
                echo '<div class="img-box">';
                echo '<img src="upload/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
                echo '<p> <a href="download.php?file=' . urlencode($image) . '">Download</a> </p>';
                /*
                 echo '<p> <a href="download.php?file=' . urlencode($image) . '">Download Zip file</a> </p>';
                 echo '<p> <a href="download.php?file=' . urlencode($image) . '">Download PDF file</a> </p>';
                 echo '<p> <a href="download.php?file=' . urlencode($image) . '">Download Image file</a> </p>';
                 echo '<p> <a href="download.php?file=' . urlencode($image) . '">Download EXE file </a> </p>';
                 echo '<p> <a href="download.php?file=' . urlencode($image) . '">Download ISO file</a> </p>';
                */
                echo '</div>';
             }
         ?>


    </body>
</html>