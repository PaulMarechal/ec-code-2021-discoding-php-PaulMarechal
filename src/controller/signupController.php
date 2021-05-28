<?php 

require_once( 'model/user.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/signupView.php');
  else:
    require('view/loginView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/

function signup( $post ) {

  if(!empty($post)){

    $data                   = new stdClass();
    $data->email            = $post['email'];
    $data->username         = $post['username'];
    $data->avatar_url       = $post['avatar_url'];
    $data->password         = hash('sha256', $post['password']);
    $data->password_confirm = hash('sha256', $post['password_confirm']);
  
    if(empty($post['email']) && empty($post['username']) && $post['password']){
      $error_msg =  "<p class='errorMessage'>Please fill in all the information 🤓</p>";
    }

    elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $post['email'])){
        $error_msg = "<p class='errorMessage'>Please enter a valid email</p>";
    }
    
  # Check if passwords are matching
  try {
      $user               = new User( $data );
      $user->createUser();

      # Todo add a popup to signal the creation of the user
      # Todo mailing to confirm the account
      header( 'location: index.php ');
  }
  catch (Exception $e) {
      //$error_msg = $e->getMessage();
      $error_msg =  "<p class='errorMessage'>Please fill in all the information 🤓</p>";

  }

  require('view/signupView.php');
} 
}

?>