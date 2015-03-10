<!DOCTYPE html>
<html lang="es">

<head>
    <title>WAPOSAT</title>
    
    <?php
    // cabecera que incluye Jquery y bootstrap
    include_once("../include/head.default.php");
    ?>
    
    <!-- Especific CSS -->
    <link href="index/style.index.css" rel="stylesheet">
    
    <!-- Especific JS -->
    <script src="index/index.js"></script>
    
</head>

<body>
    
    <!-- Navigation -->
    <?php include_once("../include/navbar.default.php"); ?>
    
    <!-- editar los archivos ne las carpetas -->
    
    <!-- Header o slyder -->
    <?php include_once("index/header.php"); ?>

    <!-- Waposat -->
    <?php include_once("index/waposat.php"); ?>
    
    <!-- Funcionamiento -->
    <?php include_once("index/funcionamiento.php"); ?>
    
    <!-- Aplicaciones -->
    <?php include_once("index/aplicaciones.php"); ?>
    
    <!-- Plataforma web -->
    <?php include_once("index/plataformaweb.php"); ?>
    
    <!-- Logros -->
    <?php include_once("index/logros.php"); ?>
    
    <!-- Footer -->
    <?php include_once("../include/footer.default.php"); ?>
    
</body>

</html>