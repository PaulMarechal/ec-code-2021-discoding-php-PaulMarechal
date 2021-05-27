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
  $data                   = new stdClass();
  $data->email            = $post['email'];
  $data->username         = $post['username'];
  $data->avatar_url       = $post['avatar_url'];
  $data->password         = hash('sha256', $post['password']);
  $data->password_confirm = hash('sha256', $post['password_confirm']);
  
  

  # Check if passwords are matching
  try {
      $user               = new User( $data );
      $user->createUser();

      # Todo add a popup to signal the creation of the user
      # Todo mailing to confirm the account
      header( 'location: index.php ');
  }
  catch (Exception $e) {
      $error_msg = $e->getMessage();
  }

  require('view/signupView.php');
} 

?>