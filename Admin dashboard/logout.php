<?php
session_start();
unset($_SEESSION ['email']);
session_destroy();

header("location: ../login.php");
exit();
?>