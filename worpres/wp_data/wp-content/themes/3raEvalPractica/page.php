<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar con Bootstrap</title>


</head>

<body>
    <?php get_header(); ?>
    <div class="d-flex">
        <nav id="sidebar" class=" p-3">
            <div class="d-flex">
                <?php get_sidebar(); ?>

            </div>
        </nav>
        <div id ="contenido" class="container">
            <h1 class ="text-center text-warning "><?php the_title(); ?></h1>
            <div class="row">

                <div class="col-md-4">
                    <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );
                    wp_nav_menu($args);
                    ?>
                </div>

                <div class="col-md-8">
                    <p>
                        Aquí va tu contenido principal. Texto, imágenes, lo que necesites.
                    </p>
                </div>


            </div>
        </div>

    </div>
    <?php get_footer(); ?>
</body>

</html>