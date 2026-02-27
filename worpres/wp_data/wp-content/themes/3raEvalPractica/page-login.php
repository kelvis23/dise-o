<?php
/*
Template Name: Login
*/
?>

<?php get_header(); ?>

<style>

</style>

<div class="container my-5">
    <div class="row align-items-center">

        <div class="col-md-4 mb-4 mb-md-0">
            <div class="card bg-dark text-white shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <h3 class="text-center mb-4">Iniciar Sesión</h3>

                    <form action="#" method="POST">

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text"
                                   class="form-control bg-secondary text-white border-0"
                                   id="usuario"
                                   name="usuario"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password"
                                   class="form-control bg-secondary text-white border-0"
                                   id="password"
                                   name="password"
                                   required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="recordarme">
                            <label class="form-check-label" for="recordarme">
                                Recordarme
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning rounded-3">
                                Entrar
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-8 text-center d-none d-md-block">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', [
                    'class' => 'img-fluid rounded-4 shadow'
                ]); ?>
            <?php endif; ?>
        </div>

    </div>
</div>



