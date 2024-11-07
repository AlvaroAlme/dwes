<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tarea-dwes-02</title>
</head>

<body>
    <?php
    if (!isset($contacto)) {
        $contacto = [];
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /*$contacto = [];
                $contacto["nombre"] = $_GET["nombre"];
                $contacto["telefono"] = $_GET["telefono]"*/

        $contacto[$_POST["nombre"]] = $_POST["telefono"];
    }

    ?>
    <h1>Agenda</h1>
    <div>
        <?php
        foreach ($contacto as $nombre => $telefono) {
            echo "$nombre: $telefono <br>";
        }
        ?>
    </div>
    <?php


    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <p>Nuevo Contacto</p>
        <p>Nombre</p>
        <input type="text" name="nombre" />
        <p>Telefono</p>
        <input type="text" name="telefono" />

        <input type="submit" value="Añadir Contacto">
        <input type="reset" value="Limpiar Campos">
    </form>
    <div>
        <input type="button" value="Vaciar Agenda">
    </div>
</body>

</html>