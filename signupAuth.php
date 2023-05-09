<?php
include "../db_conn.php";
session_start();

if(isset($_POST['signUp'])) {
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $mail = $_POST['userMail'];
    $mobile = $_POST['userNumber'];
    $pass = md5($_POST['password']);
    $confirmPass = md5($_POST['rePassword']);

    if($pass != $confirmPass) {
        echo "<script> alert('Password is Incorrect');</script>";
        header("Location: http://localhost:8012/online-book-store-main-new_account.php");
    } else {
        $sql = "INSERT INTO admin VALUES('')";
    }
}
?>