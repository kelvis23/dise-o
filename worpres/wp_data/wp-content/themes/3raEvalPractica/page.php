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

        <!-- Contenido principal -->
        <div id="content" class="p-4">
            <h1><?php the_title(); ?></h1>
            <p>Este es el contenido principal de la página.</p>
        </div>
    </div>
    <?php get_footer(); ?>
</body>

</html>