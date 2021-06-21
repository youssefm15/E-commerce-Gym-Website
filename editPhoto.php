<?php
session_start();
if (!isset($_SESSION['id']))  header("location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
  <style>

   body {
  background-color: #046582;
}

.button {
  background-color: #6e7582; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    align-content: center;
    
}
      .in{
          margin-top: 300px;
          margin-bottom: 300px;
          margin-left: 550px;


  width: 50%;
  padding: 10px;
      }
      </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
   <div class="in"> 
    <form action="processform.php" method="post" enctype="multipart/form-data">
        <input   type="file" name="my_image">
        <input  class="button" type="submit" name='submit' value="Upload">
    </form>
    </div>
</body>

</html>