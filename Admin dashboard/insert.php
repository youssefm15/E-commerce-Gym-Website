<?php
session_start();
include "../dbcon.php";
if (isset($_POST['insert']) && isset($_SESSION['id'])&& isset($_SESSION['usertype'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image_name =  $_FILES['my_image']['name'];
  $image_size =  $_FILES['my_image']['size'];
  $tmp_name =  $_FILES['my_image']['tmp_name'];
  $error =  $_FILES['my_image']['error'];
  if ($error === 0) {
      $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);
      $allowed_exs = array("jpg", "jpeg", "png");
      if (in_array($img_ex_lc, $allowed_exs)) {
          $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
          $img_upload_path = 'cartImage/' . $new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
          $query = "INSERT INTO register.tbl_product (`id`,`name`,`price`,`image`) VALUES ($id ,'$name', $price, '$new_img_name') ";
          $query_run = mysqli_query($con, $query);
          if($query_run){
              echo '<script type="text/javascript"> alert ("Data Updated")</script>';
          }
          else{
         echo '<script type="text/javascript"> alert ("Data Not Updated")</script>';
          }
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
  function reload(event){
  //  event.preventDefault()
  }
  </script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Insert Cart items</title>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="insert.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">insert Cart items</h2>
                </div>
                <div class="card-body">
                    <form  action="insert.php" method="post" id="insertcart" enctype="multipart/form-data">
                      <div class="form-row">
                          <div class="name">ID</div>
                          <div class="value">
                              <div class="input-group">
                                <input class="input--style-6" type="number" name="id" >
                              </div>
                          </div>
                      </div>

                        <div class="form-row">
                            <div class="name">Name of the product</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group">
                                  <input class="input--style-6" type="number" name="price" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">image</div>
                            <div class="value">
                                <div class="input-group">
                                  <input type="file" name="my_image">

                                </div>
                            </div>
                        </div>


                         <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="insert" onclick="reload(event)" value="INSERT DATA">insert</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
</body>

</html>
