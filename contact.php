<?php
ini_set("SMTP","ssl://yossefm2013@gmail.com");
ini_set("smtp_port","20");

$message_sent =false;
if(isset($_POST['submit'])&&isset($_POST['email'] )&& $_POST['email'] !=''){

    $username=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $masssege=$_POST['masssege'];

    $to = "yossefm2013@gmail.com";
    $body="";
    $body .= "From:".$username."\r\n";
    $body .= "Email:".$email."\r\n";
    $body .= "Message:".$masssege."\r\n";
    mail($to,$subject,$body);
    $message_sent=true;
        
            }


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gym contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">

  </head>
  <body>
    <?php
    if ($message_sent):
     ?>
     <h3>Thanks, we'll be in touch</h3>
     <?php
   else:
      ?>
    <section class="contact">
      <div class="content">
        <h1 style="color:white;">Contact Us</h1>
        <p style="color:white;"> join us now for Premium discounts and for a journey throught our training Classes for more healthy life </p>

      </div>
      <div class="container">
        <div class="contactInfo">
          <div class="box">
            <div class="icon">
<i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="text">
            <h3>Address</h3>
            <p style="color:white; font-weight:500;">Sedi gabr road ,<br>Alexandria,Egypt<br>55060</p>
            </div>
          </div>

            <div class="box">
              <div class="icon">
  <i class="fa fa-envelope-o"  aria-hidden="true"></i>
              </div>
              <div class="text">
              <h3>Email</h3>
              <p style="color:white;  font-weight: 500;">mohamedbelal814@yahoo.com</p>
              </div>
            </div>
<div class="box">
  <div class="icon">
<i class="fa fa-phone"  aria-hidden="true"></i>
  </div>
  <div class="text">
  <h3>Phone</h3>
  <p style="color:white; font-weight:300;">507-475-6094</p>
  </div>
</div>

          </div>
<div class="contactForm">
  <form class="" action="contact.php" method="post">
    <h2>Send Message</h2>
    <div class="inputBox">
      <input type="text" name="name" >
      <span>Full Name</span>

    </div>
    <div class="inputBox">
      <input type="text" name="email" >
      <span>Email</span>

    </div>
     <div class="inputBox">
      <input type="text" name="subject" >
      <span>Subject</span>

    </div>
    <div class="inputBox">
<textarea name="masssege" required="required"></textarea>
      <span>Type your massege .....</span>

    </div>
    <div class="inputBox">
      <input type="submit" name="submit" value="Send">

    </div>
  </form>
</div>
        </div>
    </section>
    <?php
  endif;
   ?>
  </body>
</html>
