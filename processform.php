<?php
session_start();
include "dbcon.php";
if (isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

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
            $img_upload_path = 'profileImg/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
            //insert into database 
            $sql = "UPDATE login SET avatar = '$img_upload_path' WHERE id = $id";
            mysqli_query($con, $sql);
            header("location: profil.php");
        } else {
            echo "sad3";
        }
    } else {
        echo "Sad2";
    }
} else {
    echo "Sad1";
}
