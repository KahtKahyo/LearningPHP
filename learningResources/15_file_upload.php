<?php 
    if(isset($_POST['submit']) {
        if(!empty($_FILES['upload']['name'])) {
            // print_r($_FILES);
            if(!empty($_FILES['upload']['name'])) {
                $file_name = $_FILES['upload']['name'];
                $file_size = $_FILES['upload']['size'];
                $file_tmp = $_FILES['upload']['tmp_name'];
                $file_type = $_FILES['upload']['type'];
                $target_dir = "uploads/${file_name}"; 
            }
          
            

        }else {
            $message = "No file selected";
        }
    }
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>File Upload</title>
    </head>
    <body>
        <?php echo $message ?? null; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            Select image to upload:    
            <input type="file" name="file">
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>