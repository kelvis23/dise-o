<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header  py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <p class="text-warning m-0 fs-4">
                        3ra evaluación 2026
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpeg" alt="Logo Site" width="00">

                </div>

                <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
        </div>
    </header>
</body>

</html>