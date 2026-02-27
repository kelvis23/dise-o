<?php get_header( ); ?>
<h1>page de servicios</h1>
       <?php while( have_posts(  )): the_post(  );?>
            <h1 class="text-center texto-primario"><?php the_title(  ); ?></h1>
            
            <!-- CARGAMOS IMAGEN DESTACADA -->  

            <?php if(has_post_thumbnail()):
                the_post_thumbnail('blog', array('class'=> 'imagen-destacada')); 
              endif;
            ?>
  <?php endwhile; ?>     
  <?php get_footer( ); ?>
