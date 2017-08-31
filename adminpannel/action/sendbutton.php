
<?php

include_once'../library/dbconnection.php';
session_start();
if (isset($_POST['btnAdd'])) {
    $title = $_POST['txttitle'];
    $email = $_POST['email'];
    $message= $_POST['txtdesc'];
   

    $query = "insert into contact (NAME ,Email, Message) values ('$title','$email','$message')";
    $result = mysqli_query($conn, $query);


    if ($result) {
        $_SESSION['msg'] = "Message Sent";
        header('location:../contact.php');
    } else {
        $_SESSION['msg'] = "Message not sent";
        header('location:../index.php');
    }
}

?>