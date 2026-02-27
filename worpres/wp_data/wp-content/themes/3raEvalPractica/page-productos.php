<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-auto p-3" style="min-width: 150px; background:#f8f9fa;">
            <?php get_sidebar(); ?>
        </nav>
        

        <main class="col p-3" id="producto">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                $posts = [];
                while ($query->have_posts()):
                    $query->the_post();
                    $posts[] = [
                        'title' => get_the_title(),
                        'excerpt' => get_the_excerpt(),
                        'thumb' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : 'https://via.placeholder.com/300x200',
                        'link' => get_permalink()
                    ];
                endwhile;

                wp_reset_postdata();

                $rows = [
                    ['post', 'blank', 'post'],
                    ['blank', 'post', 'blank'],
                    ['post', 'blank', 'post'],
                    ['blank', 'post', 'blank']
                ];

                $post_index = 0;

                echo '<div class="row g-4">';

                foreach ($rows as $row) {
                    foreach ($row as $cell) {
                        echo '<div class="col-md-4 d-flex">'; 

                        if ($cell === 'post' && isset($posts[$post_index])) {
                            $p = $posts[$post_index++];
                            echo '<div class="card flex-fill text-white bg-dark border border-warning">';
                            echo '<img src="' . esc_url($p['thumb']) . '" class="card-img-top" style="height:200px; object-fit:cover;" alt="' . $p['title'] . '">';
                            echo '<div class="card-body d-flex flex-column">';
                            echo '<h5 class="card-title">' . $p['title'] . '</h5>';
                            echo '<p class="card-text text-truncate" style="display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden;">' . $p['excerpt'] . '</p>';
                            echo '<a href="' . $p['link'] . '" class="btn btn-warning mt-auto">Leer más</a>';
                            echo '</div></div>';
                        } elseif ($cell === 'blank') {
                            echo '<div class="card flex-fill bg-warning"></div>';
                        } else {
                            echo '<div class="card flex-fill bg-transparent border-0"></div>';
                        }

                        echo '</div>'; 
                    }
                }

                echo '</div>'; 
            else:
                echo '<p>No hay posts disponibles.</p>';
            endif;
            ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>