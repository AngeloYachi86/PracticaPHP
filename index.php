<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "Practica 1"; 
        ?></title>
</head>
<body>
    <?php
        $nombre = "Kurt";
        $apellido = "Cagle";
        $edad = 40;
        $fecha = new DateTime();
        $fecha->setDate(1983, 12, 5);
        $telefonos = "6543456 - 933332211";
        $direccion = "Carrer de turin, 15";
        $email = "kurt.cagle@example.com";
        $trabaja = true;
        $mide = 1.67;
    ?>

    <h1>
        <?php echo "Descrivint a ".$nombre." ".$apellido; ?>
    </h1>

    <h2>
        <?php echo "Les dades de ".$nombre." son:" ; ?>
    </h2>
   
    <ul>
        <li>Es diu: <?php echo $nombre; ?></li>
        <li>Te <?php echo $edad; ?> anys</li>
        <li>Va nexixer l'any: <strong><?php echo $fecha->format('Y-m-d'); ?></strong></li>
        <li>El seus telèfons són: <?php echo $telefonos; ?></li>
        <li>Viu <a href="tel:+"></a> <?php echo $direccion; ?></li>
        <li>El seu email és: <?php echo $email; ?></li>
        <li>Treballa: <?php echo $trabaja ? "Sí" : "No"; ?></li>
        <li>I midei <?php echo $mide; ?> metros</li>
    </ul>

</body>
</html>