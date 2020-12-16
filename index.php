<?php
  $user_name = htmlspecialchars($_POST['user_name']);
  $user_email= htmlspecialchars($_POST['user_email']);
  $user_question= htmlspecialchars($_POST['user_question']);
  echo  $user_name, ' ', $user_email, ' ', $user_question;
    
?>