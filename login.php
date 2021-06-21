<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GYM Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://use.fontawesome.com/0e46e58ec0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  </head>
  <body>
    <h2 style="color:white;">Join us now Premium Membership</h2>
    <?php

             if (!isset($_SESSION['id']))
                 echo " <a
		  class='nav-link' href='./login.php'>   </a>";
         else {
                    $username = $_SESSION['username'];
                 echo "<a
		  class='nav-link' href='./profil.php'> Welcome $username  </a> ";
             }

             ?>
    <div class="container" id="container">
    	<div class="form-container sign-up-container">
    		<form action="regproc.php" method="post">
    			<h1>Create Account</h1>
    			<div class="social-container">
    				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
    				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>

    			</div>
    			<span>or use your email for registration</span>
    			<input type="text" name="username" placeholder="Enter your Name" />
          <input type="password" name="password" placeholder="Enter your password" />
          <input type="password" name="repassword" placeholder="Re-enter your password" />
	      	<input type="email" name="email" placeholder="Enter your Email" />
    			<button name="reg" type="submit" value="sign up">Sign Up</button>
    		</form>
    	</div>
    	<div class="form-container sign-in-container">
    		<form action="logproc.php" method="post">
    			<h1>Sign in</h1>
    			<div class="social-container">
    				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
    				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
    				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
    			</div>
    			<span>or use your account</span>
    			<input type="email" name="email" placeholder="Email" />
    			<input type="password" name="password" placeholder="Password" />
          Select user type:
          <select name="usertype">
              <option value="admin">admin</option>
              <option value="user">user</option>
            </select>
    			<button>Sign In</button>
    		</form>
    	</div>
    	<div class="overlay-container">
    		<div class="overlay">
    			<div class="overlay-panel overlay-left">
    				<h1>Welcome Back!</h1>
    				<p>To keep connected with us please login with your personal info</p>
    				<button class="ghost" id="signIn">Sign In</button>
    			</div>
    			<div class="overlay-panel overlay-right">
    				<h1>Hello, Friend!</h1>
    				<p>Enter your personal details and start journey with us</p>
    				<button class="ghost" id="signUp">Sign Up</button>
    			</div>
    		</div>
    	</div>
    </div>

    <footer>
    	<p>
    		Created with <i class="fa fa-heart"></i> by
    		<a target="_blank" href="https://facebook.com">metora</a>
    		© Copyright 2020  | by Meteora  |   All Rights Reserved
    		<a target="_blank" href="https://facebook.com">here</a>.
    	</p>
    </footer>


    <script src="login.js">
    </script>

 </body>
</html>
