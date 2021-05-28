<?php 

  //function not sending mail because no mail server aren't configurated  
  /**
   * sendMail
   *
   * @return void
   */
  function sendMail(){

      if(!empty($_POST)){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $content = $_POST['content'];


      $error_msg = null;

      //form validation, returning $error_msg or $success_msg to the user

      if(empty($name) && empty($email) && empty($content)){
          $error_msg =  "<p class='errorMessage'>Merci de remplir tous les champs 🤓</p>";
       }

      elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
          $error_msg = "<p class='errorMessage'>Le mail n'est pas valide</p>";
      }
      else{
          $success_msg = "<p class='succesMessage'>Le mail a bien été envoyé</p>";
          $_POST['success_msg'] = $success_msg;
      }


      $mail = htmlentities(strtolower($email));

      $formcontent="From: $name \n Message: $content";
      $recipient = "contact@codflix.com";
      $subject = "Contact Form";
      $mailheader = "From: $email \r\n";
      $headers  = 'From:'.$name.' <'.$email.'>' . "\r\n";

      //mail()function 
      mail($recipient, $subject, $formcontent, $headers) or die("Error!");

      $_POST['error_msg'] = $error_msg;}
      require('view/contactView.php');
  }  

  ?>