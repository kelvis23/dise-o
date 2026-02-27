<?php get_header(); ?>
<div class="d-flex container-fluid bg-yellow-sides"> <nav id="sidebar" class="p-3" style="min-width: 150px;">
        <?php get_sidebar(); ?>
    </nav>

    <main class="flex-grow-1 my-5 px-4">
        <div class="galeria-grid">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://via.placeholder.com/300x200'; // Imagen por defecto si no hay
                    ?>
                    
                    <div class="card-producto">
                        <div class="card-img-container">
                            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="card-body">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-leer-mas ">Leer más</a>
                        </div>
                    </div>

                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>