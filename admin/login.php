<?php
session_start();
//koneksi ke database
require '../function.php';
?>

<?php
if(isset($_POST['login'])){
$username = $_POST['user'];
$password = $_POST['pass'];

	$result = mysqli_query($koneksi, "SELECT username, password, nama_lengkap FROM admin WHERE username ='$username' AND password = '$password'");
    list($username, $password) = mysqli_fetch_array($result);
	if (mysqli_num_rows($result) > 0){
		echo "<div class='alert alert-info'>Login sukses</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		$_SESSION['login'] = true;
        $_SESSION['admin'] = $username;
		die();
	}
	else{
		echo "<div class='alert alert-danger'>Login gagal!</div>";
		echo "<meta http-equiv='refresh' content='1;url=login.php'>";
	}
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login Admin</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />
	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
	<div class="container">
		<div class="row text-center ">
			<div class="col-md-12">
				<br /><br />
				<h2 style="color: #4FD3C4;"> Betta Guppy Mangga : Login</h2>
				
				<h5>( Login yourself to get access )</h5>
				<br />
				<br><center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>
				
			</div>
		</div>
		<div class="row ">
						
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong	strong>   Enter Details To Login </strong>  
					</div>
					<div class="panel-body">
						<form role="form" method="post"><br />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
								<input type="text" class="form-control" name="user" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" class="form-control"  name="pass" />
							</div>
							<div class="form-group">
								<label class="checkbox-inline">
									<input type="checkbox" /> Remember me
								</label>
							</div>
										
							<button class="btn btn-primary" name="login">Login</button>
							<hr /> 
						</form>

					</div>
												
				</div>
			</div>			
						
		</div>
	</div>


	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
   
</body>
</html>
