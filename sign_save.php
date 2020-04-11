<?php


include('db2.php');

if (isset($_POST['sign_save'])) 
{
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $q="SELECT email FROM signup WHERE email='$email' ";
  $res = mysqli_query($conn, $q);
  if(!$result)
  {
    $query = "INSERT INTO signup (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $query);
    if(!$result)
    {
      die("Query Failed.");
    }

  }
  else
  {
    print"You Alredy have an account with this email";

  }
  
/*
  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';*/
  
  header('Location: signup.php');

}



?>