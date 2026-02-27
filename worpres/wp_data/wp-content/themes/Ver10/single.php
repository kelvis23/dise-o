<?php include 'header.php' ?>

<?php while( have_posts(  )): the_post(  );?>
    <h1><?php the_title(  ); ?></h1>
    <?php the_content(  ); ?>

    Post Escrito por: <?php the_author( )?>
    Post Escrito Fecha: <?php the_date( )?>
<?php endwhile; ?>

<?php get_footer( ); ?>
