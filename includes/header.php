<?php
$en_subcarpeta = (strpos($_SERVER['REQUEST_URI'], '/temas/') !== false);
$ruta_base = $en_subcarpeta ? ".." : ".";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataformas Tecnológicas - Sistemas Operativos</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        <?php
        $css_file = __DIR__ . '/../css/style.css';
        
        if (file_exists($css_file)) {
           
            readfile($css_file);
        } else {
            echo "/* ERROR CRÍTICO: No se encontró el archivo style.css en: $css_file */";
            echo "/* Asegúrate de que la carpeta 'css' esté al mismo nivel que 'includes' */";
        }
        ?>
        
        
        body { padding-top: 70px; }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <a href="<?php echo $ruta_base; ?>/netsyslab.php" style="color: inherit; text-decoration: none;">
                <i class="fas fa-microchip"></i> NetSysLab
            </a>
        </div>
        
        <ul class="nav-links">
            <li><a href="<?php echo $ruta_base; ?>/netsyslab.php">Inicio</a></li>
            <li><a href="<?php echo $ruta_base; ?>/temas/introduccion.php">Introducción</a></li>
            <li><a href="<?php echo $ruta_base; ?>/temas/procesos.php">Procesos</a></li>
            <li><a href="<?php echo $ruta_base; ?>/temas/memoria.php">Memoria</a></li>
            <li><a href="<?php echo $ruta_base; ?>/temas/almacenamiento.php">Almacenamiento</a></li>
        </ul>
        
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    
    <main class="main-content">