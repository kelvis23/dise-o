<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galeria</title>
</head>
<body>
        <?php get_header(); ?>

        <main class="container my-5">

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6 
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
        $count = 0;
        echo '<div class="galeria-irregular">';

        while ($query->have_posts()):
            $query->the_post();
            if (has_post_thumbnail()):
                $thumb_url = get_the_post_thumbnail_url(get_the_ID(), );

                echo '<div class="item-galeria">';
                echo '<img src="' . esc_url($thumb_url) . '" alt="' . get_the_title() . '">';
                
                echo '</div>';
            endif;
        endwhile;

        echo '</div>';
    endif;
    wp_reset_postdata();
    ?>

</main>


</body>
</html>