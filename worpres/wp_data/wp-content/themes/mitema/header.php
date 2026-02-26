<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<?php wp_head();?>
</head>

<body>
    <header class="site-header">
        <div class="contenedor">
            <div class="barra-navegacion">
                <!-- Ruta con funcionalidad de WP para hacer el codigo portable -->
                <div class="logo">
                    <h1>Este es mi header.php </h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Site">
                    <p>esto pertenese al hedear y lo de abajo a la pagina</p>
                </div>
                <!-- Navegación -->
                <nav>
                </nav>
            </div>
        </div>
    </header>
    
   <?php
   $args = array(
      'theme_location' => 'menu-principal',
      'container' => 'nav',
      'container_class' => 'menu-principal2'
   );
   wp_nav_menu($args);
   ?>

</body>

</html>
</body>

</html>