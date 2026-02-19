<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <footer class="site-footer">
      <h1>Este es mi footer.php </h1>
      <p>esto le pertenese al footer y lo de ariva a la pagina</p>


      <?php
      $args = array(
         'theme_location' => 'menu-principal2',
         'container' => 'nav',
         'container_class' => 'menu-principal'
      );
      wp_nav_menu($args);
      ?>

   </footer>
</body>

</html>