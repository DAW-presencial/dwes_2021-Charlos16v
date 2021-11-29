
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

            $firstFile = $_FILES["firstFileInput"];
            $secondFile = $_FILES["secondFileInput"];

            if($firstFile['name'] == "" && $firstFile['size'] == 0) {
                echo'<script type="text/javascript">
                    alert("¡No se ha guardado el primer archivo!");
                    window.location.href="index.php";
                    </script>';
            }
            else if($secondFile['name'] == "" && $secondFile['size'] == 0) {
                echo'<script type="text/javascript">
                    alert("¡No se ha guardado el segundo archivo!");
                    window.location.href="index.php";
                    </script>';
            } else {
                echo'<script type="text/javascript">
                alert("¡Se han guardado los 2 ficheros!");
                window.location.href="index.php";
                </script>';
            }
            /**
             * 
             */
        }
    ?>  
    <h1>Formulario subida de archivos</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        <label for="firstFileInput">Seleccione Archivo: </label>
        <input type="file" name="firstFileInput" id="firstFileInput">
        <br>
        <label for="secondFileInput">Seleccione Archivo: </label>
        <input type="file" name="secondFileInput" id="secondFileInput">
        <br>
        <input name="submit" type="submit" value="Submit">
    </form>
</body>
</html>
