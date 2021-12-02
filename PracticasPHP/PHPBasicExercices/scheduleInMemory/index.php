<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Agenda</title>
    </head>
    <body>
        <?php
        if (isset($_GET['agenda']))
            $agenda = $_GET['agenda'];
        else
            $agenda = array();
        
        
        if (isset($_GET['submit']))
        {
            $nuevo_nombre = filter_input(INPUT_GET,'nombre');
            $nuevo_telefono = filter_input(INPUT_GET,'telefono');
            if (empty($nuevo_nombre))
            {
                echo "<p style='color:red'>¡Se debe introducir un nombre!</p><br />";
            }
            elseif (empty($nuevo_telefono))
            {
                unset($agenda[$nuevo_nombre]);
            }
            else
            {
                $agenda[$nuevo_nombre] = $nuevo_telefono;
            }
        }
        ?>

        <h2>Nuevo contacto</h2>

        <form>
            <div style="align-items: left">
                <label>Nombre:<input type="text" name="nombre"/></label><br />
                <label>Teléfono:<input type="number" name="telefono"/></label><br />
                <input type="submit" name='submit' value="Guardar"/><br />
            </div>
        </form>
        <br />

        <h2>Agenda</h2>
        <?php
        if (count($agenda) == 0)
        {
            echo "<p>No hay contactos en la agenda.</p>";
        }
        else
        {
            echo "<ul>";
            foreach ($agenda as $nombre => $telefono) {
                echo "<li>" . $nombre . ': ' . $telefono . "</li>";
            }
            echo "</ul>";
        }
        ?>        
    </body>
</html>