<?php
include("header.php");

$username = $password = "";
$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

if(isset($_POST['signin'])){
	//login
	$login = mysqli_query($conn,"SELECT * FROM tblusers WHERE username = '$username' AND password = '$password' ");
	$check = mysqli_fetch_array($login);
		if(isset($check)){
			session_start();
			$_SESSION['s_username'] = $username;
			$_SESSION['s_password'] = $password;
			header("location: index.php");
		}else{
			echo "<script>alert('Login failed: Invalid username or password.')</script>";
		}
}


?>


<!--login beg-->
<!-- Custom styles for this template -->
<link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
<title>Signin | <?php echo SITE_NAME;?></title>
  <body class="text-center ">
    <form action="login.php" method="post" class="form-signin">
      <img class="mb-4" src="https://hiveam.com/themes/default/frontend/images/tour/icons/fbpixel.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="signin" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; <?php echo date("Y");?></p>
    </form>
  </body>
<!--login end-->



