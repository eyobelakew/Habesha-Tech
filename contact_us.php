<?php
include 'Config/dbconfig.php';
 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  if(!isset($name) || empty($name)){
      $name_c = "Name, ";
  }

  if(!isset($email) || empty($email)){
      $email_c = "Email, ";
  }
  
  if(!isset($phone) || empty($phone)){
      $phone_c = "Phone number, ";
  }
  
  if(!isset($message) || empty($message)){
      $message_c = "Message";
      echo "<div class='alert alert-danger'>".$name_c." ".$email_c." ".$phone_c." ".$message_c." Can not be Empty ! </div>";
  }  else {
      
  $commentSent ="INSERT INTO messages (Name, Email, Number, Message)VALUES('$name','$email','$phone','$message')";
  if ($conn->query($commentSent) === TRUE) {
    echo "<div class='alert alert-success'><i class='fa fa-check'></i> Message Successfully Sent !</div>";
  }else {
    echo "<div class='alert alert-danger'><i class='fa fa-warning'></i> Something Went Wrong !</div>";
  }
}
?>