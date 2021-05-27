<?php ob_start(); ?>

<!-- Contact page -->
<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-md-4 mx-auto auth-container">
            <h3 class="titleContact">Hello you!</h3>
            <i class="bi bi-arrow-left-circle arrowBack" title="Back" onclick="location.href='index.php'"></i>
                    
            <p class="text-muted underTitleContact">How can we help you ?</p>
            <form action="index.php?action=contact" method="post">
                <!-- Mail -->
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <!-- Name -->
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="" id="name" class="form-control" />
                </div>

                <!-- Content -->
                <div class="mb-3">
                    <label for="comment">Message</label>
                    <textarea class="form-control" name="content" rows="5" id="content"></textarea>
                </div>

                <!-- Send button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-info btn-lg btn-block w-100 sendButton">Send</button>
                </div>

                <!-- Error message -->
                <span class="error-msg justify-content-center">
                    <?= isset( $error_msg ) ? $error_msg : null; ?>
                </span>
                <!-- Succes message -->
                <span class="success-msg justify-content-center">
                    <?= isset($success_msg) ? $success_msg : null; ?>
                </span>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>
