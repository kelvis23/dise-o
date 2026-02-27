
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main class="container my-5">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6 
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
        $posts = [];
        while ($query->have_posts()): $query->the_post();
            $posts[] = [
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'thumb' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : 'https://via.placeholder.com/300x200',
                'link' => get_permalink()
            ];
        endwhile;

        wp_reset_postdata();

        // Patrón de filas
        $rows = [
            ['post', 'blank', 'post'],  // Fila 1
            ['empty', 'post', 'empty'], // Fila 2
            ['post', 'blank', 'post'],  // Fila 3
            ['empty', 'post', 'empty']  // Fila 4
        ];

        $post_index = 0;

        echo '<div class="row g-4">';

        foreach ($rows as $row) {
            foreach ($row as $cell) {
                echo '<div class="col-md-4">';

                if ($cell === 'post' && isset($posts[$post_index])) {
                    $p = $posts[$post_index++];
                    echo '<div class="card h-100 text-white bg-warning">';
                    echo '<img src="' . esc_url($p['thumb']) . '" class="card-img-top" style="height:200px; object-fit:cover;" alt="' . $p['title'] . '">';
                    echo '<div class="card-body d-flex flex-column">';
                    echo '<h5 class="card-title">' . $p['title'] . '</h5>';
                    echo '<p class="card-text text-truncate" style="display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden;">' . $p['excerpt'] . '</p>';
                    echo '<a href="' . $p['link'] . '" class="btn btn-light mt-auto">Leer más</a>';
                    echo '</div></div>';
                } elseif ($cell === 'blank') {
                    echo '<div class="card h-100 bg-white"></div>';
                } else { // empty
                    echo '<div class="card h-100 bg-transparent border-0"></div>';
                }

                echo '</div>'; // col
            }
        }

        echo '</div>'; // row
    else:
        echo '<p>No hay posts disponibles.</p>';
    endif;
    ?>
</main>
</body>
</html>