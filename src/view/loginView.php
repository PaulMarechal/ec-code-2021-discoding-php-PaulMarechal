<?php ob_start(); ?>

<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-md-4 mx-auto auth-container">
            <!-- Page title -->
            <h3>Welcome back!</h3>
            <i class="contactLogin bi-envelope-fill align-self-center d-flex justify-content-end" title="Back" onclick="location.href='index.php?action=contact'"></i>

            <!-- Login Form -->
            <p class="text-muted">We're so excited to see you again!</p>
            <form action="/index.php?action=login" method="post">
                <!-- Label email -->
                <div class="mb-3">
                    <label for="email" class="form-label text-muted small text-uppercase">Email or Phone number</label>
                    <input type="email" class="form-control" id="email" name="email"/>
                </div>

                <!-- Label password -->
                <div class="mb-3">
                    <label for="password" class="form-label text-muted small text-uppercase">Password</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                </div>

                <!-- Login button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Login</button>
                </div>
                
                <!-- Signup button -->
                <div class="md-6">
                  <a href="index.php?action=signup" class="btn btn-info btn-lg btn-block w-100">Signup</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>
