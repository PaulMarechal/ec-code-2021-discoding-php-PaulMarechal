<?php

// ajouter session user test 
date_default_timezone_set('Europe/Paris');

require_once('controller/conversationController.php');
require_once('controller/friendController.php');
require_once('controller/loginController.php');
require_once('controller/signupController.php');
require_once( 'controller/contactController.php' );


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        
        case 'login':
            if (!empty($_POST)) {
                login($_POST);
            } else {
                loginPage();
            }
            break;
            
        case 'signup':
            if (!empty($_POST)) {
                signup($_POST);
            } else {
                signupPage();
            }
            break;
            
        case 'logout':
            logout();
            break;
        
        case 'contact':
            sendMail();
            break;

        case 'conversation':
            conversationPage();
            break;

        case 'friend':
            friendPage();
            break;
    }
} else {
    $user_id = $_SESSION['user_id'] ?? false;

    if ($user_id) {
        friendPage();
    } else {
        loginPage();
    }
}
