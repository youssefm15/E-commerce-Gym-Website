<?php
require "../dbcon.php";
session_start();
if (!isset($_SESSION['id']))  header("location: login.php");
$id = $_SESSION['id'];
$query = "select * from login where id= '$id'";
$result = mysqli_query($con, $query);
while ($rows = mysqli_fetch_array($result)) {
    $name = $rows['name'];
    $email = $rows['email'];
    $avatar = $rows['avatar'];
    $phone = $rows['phone'];
    $profession = $rows['profession'];
    // $id = $rows['id'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style>
        .card{
            margin: 50px;
        }
      </style>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <a class="navbar-brand" href="#"><img src="logo.png" alt="logo"></a>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn"> Logout  </a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="insert.php"><i class="fas fa-cart-plus"></i><span>Insert items into market</span></a>
        <a href="display.php"><i class="fas fa-table"></i><span>Tables</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div >
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
       <?php
                        if ($avatar) {
                            echo "<img src=$avatar alt='' class='image' />";
                        } else {
                            echo ("<img src='//www.gravatar.com/avatar/4344ccb0555d3f6a3dc2fc55f47f3488?s=200&r=pg&d=mm' alt='' />");
                        }
                        ?>
      
        <br><h4><?php echo $name;  ?></h4>
      </div>
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="insert.php"><i class="fas fa-cart-plus"></i><span>Insert items into market</span></a>
      <a href="display.php"><i class="fas fa-table"></i><span>Tables</span></a>
      <a href="calender.php"><i class="fas fa-th"></i><span>Calender</span></a>
        <a href="cartadmin.php"><i class="fas fa-th"></i><span>Cart</span></a>

      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <h3>Of course it’s hard. It’s supposed to be hard. If it were easy, everybody would do it. Hard is what makes it great.”
</h3>
      </div>
      <div class="card">
          <h3>It’s no secret that employees who feel they are valued and recognized for the work they do are more motivated, responsible, and productive. This motivation training course will help supervisors and managers create a more dynamic, loyal, and energized workplace. It is designed specifically to help busy managers and supervisors understand what employees want, and to give them a starting point for creating champions.</h3>
      </div>
      <div class="card">
        <h3>Motivation is the secret ingredient that energizes, maintains, and enhances workplace performance. Strategically, a motivated workforce is more likely to innovate, achieve goals, deliver quality work, and work more productively. Practically, a motivated workforce is less likely to have conflict, absenteeism, and turnover. That makes learning how to motivate your workforce more important than ever in today’s competitive and demanding business environment.</h3>
      </div>
       <div class="card">
        <h3>Your body can stand almost anything. It’s your mind that you have to convince.
        You are nothing else but what you make of yourself.
        Beast is what I become each and every time I step through those gym doors.</h3>
      </div>
       <div class="card">
        <h3>Believe you can and you will.
        Its going to be a journey. It’s not a sprint to get in shape.
        Never say the sky’s the limit when there are footprints on the moon.
        sSuffer the pain of discipline or suffer the pain of regret.</h3>
      </div>
       <div class="card">
        <h3>Train like a beast, look like a beauty.
        Focus On Your Goals, The Rest Is Just Noise.
        It’s actually pretty simple. Either you do it or You don’t.
        Making excuses burns zero calories per hour.
        It comes down to one simple thing: How bad do you want it..</h3>
      </div>
       <div class="card">
        <h3>Success starts with self discipline.
            No pain, No gain shut up and train.
        Love yourself enough to live healthy lifestyle.
        Your body was not made to serve others, Its meant to serve yourself.
        Everyday is good day to workout.
        Change happens at the speed of trust.
        If exercise was pill, It would be the most powerful medication know to humans.</h3>
      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
