<section class="container">
    <?php
    foreach ($users as $user) {
        ?>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-content black-text">
                    <span class="card-title"><?php echo $user->last_name.", ".$user->first_name; ?></span>
                    <p>E-mail: <?php echo $user->email; ?></p>
                    <p>Nombre de usuario: <?php echo $user->username; ?></p>
                    <p>Es activo?: <?php echo $user->active; ?></p>
                    <p>Fecha de actualizacion: <?php echo $user->updated_at; ?></p>
                    <p>Fecha de creacion: <?php echo $user->created_at; ?></p>
                </div>
                <div class="card-action">
                    <a href=""><?php if ($user->active) { echo 'Bloquear'; } else { echo 'Activar'; } ?></a>
                    <a href="">Administrar roles</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>