<?php


?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact Us</title>
    <link rel="stylesheet" href="stylecontact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 9356652842</div>
          <div class="text-two">+91 9860973695</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">akshaytakalkar08@gmail.com</div>
          <div class="text-two">panchalswapnil550@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Contact Us</div>
        <p></p>
      <form action="<?php $_SERVER['PHP_SELF']?>" method = "GET">
        <div class="input-box">
          <input type="text" name = "name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name = "mail" placeholder="Enter your email">
        </div>
        <div class="input-box">
          <textarea name="msg" id="" cols="30" rows="10" placeholder="Enter your message here..."></textarea>
        </div>
        <div class="input-box message-box">
          </div>
        <div class="button">
          <input type="button" name  = "sendMailBtn" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html

<?php
  include "db_conn.php";
  include "php/sendMail.php";

  if(isset($_GET['sendMailBtn']) && $conn) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $msg = $_GET['msg'];

    $stmt = $conn->prepare("INSERT INTO contact VALUES($name, $mail, $msg)");
    $res = $stmt->execute();

    if($res) {
      sendMail($mail);
    }
  }
?>