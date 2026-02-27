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
        <div id="contenido" class="container">
            <h1 class="text-center text-warning "><?php the_title(); ?></h1>
            <div class="row">
                <div class="row mb-4">

                    <div class="col-md-4">
                        <div class="card bg-black border-warning border-2 rounded-4 p-3">
                            <h6 class="text-warning fw-bold mb-3">MENÚ</h6>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-principal',
                                'container' => 'nav',
                                'container_class' => 'menu-columna',
                                'fallback_cb' => false,
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-8 text-white">

                        <?php if (has_post_thumbnail()): ?>
                            <div class="mb-4 text-center">
                                <?php the_post_thumbnail('blog', array('class' => 'imagen-destacada img-fluid rounded-4')); ?>
                            </div>
                        <?php endif; ?>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>