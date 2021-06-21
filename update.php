<?php
session_start();
include "dbcon.php";
if (isset($_POST['update']) &&  isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $name = $_POST['name'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $profession = $_POST['profession'];
        $bio= $_POST['bio'];


    $query = "UPDATE login SET name='$name',password='$password',email='$email',phone ='$phone',profession='$profession' ,bio='$bio' where id=$id";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        echo '<script type="text/javascript"> alert ("Data Updated")</script>';
    }
    else{
   echo '<script type="text/javascript"> alert ("Data Not Updated")</script>';

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Update form</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/update.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Update Information</h2>
                </div>
                <div class="card-body">
                    <form  action="update.php" method="POST">
                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                  <input class="input--style-6" type="password" name="password" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                  <input class="input--style-6" type="phone" name="phone" placeholder="">
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">profession</div>
                            <div class="value">
                                <div class="input-group">
                                  <input class="input--style-6" type="profession" name="profession" placeholder="">
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">bio</div>
                            <div class="value">
                                <div class="input-group">
                                  <input class="input--style-6" type="bio" name="bio" placeholder="">
                                </div>
                            </div>
                        </div>

                        
                         <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="update" value="UPDATE DATA">Update</button>
                </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>



</body>

</html>
