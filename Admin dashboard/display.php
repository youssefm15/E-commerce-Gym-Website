<?php
require "../dbcon.php";
session_start();
if (!isset($_SESSION['id']))  header("location: login.php");
$id = $_SESSION['id'];
$query = "select * from login where id= '$id'";
$result = mysqli_query($con, $query);
while ($rows = mysqli_fetch_array($result)) {
    $name = $rows['name'];
   
}
?>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
 <link href="display.css" rel="stylesheet" media="all">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<div class="container">
    <div class="row">
    
    <p></p>
    <h1 style="color:white;">Welcome Admin: <?php echo $name;  ?></h1>
    <p style="color:white;">A table display registerd users</p>
  
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Users information</h3>
                  </div>
                 
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Profession</th>

                        
                    </tr> 
                  </thead>
                  <tbody>
                         <?php
include "../dbcon.php";
$sql = "Select * from login";
$query = mysqli_query($con, $sql);
$nums  = mysqli_num_rows($query);
while ($res= mysqli_fetch_array($query)){
  
     ?>
                            <tr>
                             

                             <td align="center">
                             <?php  echo "<a class='btn btn-danger' href='delete.php?id=".$res['id']."' ><em class='fa fa-trash'></em></a>";
                                 ?>
                            </td>
                            <td class="hidden-xs"><?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['phone']; ?></td>
                            <td><?php echo $res['profession']; ?></td>
                                
                              </tr>
 <?php                        
}
?>

                         
                        </tbody>
                </table>
            
              </div>
             
            </div>

</div></div></div>
</body>