<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wp-bootstrap</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navegacion">
            <div class="continer">
                <div class="row">
                    <div class="col-md-4">
                        <h1>
                            Logo aqui
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-dev.png" alt="Logo Site">
                        </h1>
                    </div>
                    <div class="col-md-8">
                        <h1>
                            Menu aqui
                            <?php
                            $args = array(
                                'theme_location' => 'menu-principal',
                                'container' => 'nav',
                                'container_class' => 'menu-principal'
                            );
                            wp_nav_menu($args);
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
        </nav>
    </header>