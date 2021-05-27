<?php ob_start(); ?>

<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">

        <!-- Signup title page -->
        <h3>Signup!</h3>
        <p class="text-muted text-muted-signup">Join the huge Discoding family!</p>
          
            <!-- Form signup -->
            <form method="post" action="" class="custom-form">
                <!-- Email label -->
                <div class="form-group espace">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" value="" id="email" class="form-control" />
                </div>

                <!-- Username label -->
                <div class="form-group espace">
                    <label for="email">Username</label>
                    <input type="username" name="username" value="" id="username" class="form-control" />
                </div>

                <!-- Avatar_url label -->
                <div class="form-group espace">
                    <label for="avatar_url">Avatar</label>
                    <input type="avatar_url" name="avatar_url" value="" id="avatar_url" class="form-control" />
                </div>

                <!-- Password label -->
                <div class="form-group espace">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <!-- Confirm_password label -->
                <div class="form-group espace">
                    <label for="password_confirm">Confirmez votre mot de passe</label>
                    <input type="password" name="password_confirm" id="password_confirm" class="form-control" />
                </div>
                <br>

                <div class="form-group">
                <div class="row">
                    <!-- Submit button -->
                    <div class="col-md-6">
                    <input type="submit" name="Valider" class="btn btn-primary btn-lg btn-block w-100" />
                    </div>
                    <!-- Login button -->
                    <div class="col-md-6">
                    <a href="index.php?action=login" class="btn btn-info btn-lg btn-block w-100">Connexion</a>
                    </div>
                </div>
                </div>
        
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>
