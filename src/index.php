<?php

// ajouter session user test 
date_default_timezone_set('Europe/Paris');

require_once('controller/conversationController.php');
require_once('controller/friendController.php');
require_once('controller/loginController.php');
require_once('controller/signupController.php');
require_once( 'controller/contactController.php' );
require_once('controller/createServerController.php');
require_once('controller/serverController.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        
        // Login 
        case 'login':
            if (!empty($_POST)) {
                login($_POST);
            } else {
                loginPage();
            }
            break;
        
        // Signup
        case 'signup':
            if (!empty($_POST)) {
                signup($_POST);
            } else {
                signupPage();
            }
            break;
        
        // Logout
        case 'logout':
            logout();
            break;
        
        // Contact
        case 'contact':
            sendMail();
            break;

        // Conversation
        case 'conversation':
            conversationPage();
            break;

        // Friend
        case 'friend':
            friendPage();
            break;

        // Create server
        case 'create_server':
            createServer();
            break;
        
        // Server
        case 'server':
            serverPage();
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
