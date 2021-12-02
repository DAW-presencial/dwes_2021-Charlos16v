
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_POST['submit']) {
            $file = $_FILES["fileInput"];
        }
    ?>  
    <h1>File Form</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        <label for="fileInput">Select File: </label>
        <input type="file" name="fileInput" id="fileInput">
        <input name="submit" type="submit" value="Submit">
    </form>
</body>
</html>
