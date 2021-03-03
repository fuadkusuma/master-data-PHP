<?php

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    
			require_once("includes/myclass.php");
			

			// instance object Mahasiswa
			$user = new UserRegister();
			$user->tambahUser($_POST['name'],$_POST['username'],$_POST['email'],$_POST['password']);
	

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Navbar Bootstrap - ITBU.ac</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
<body class="bg-light">
 
    <?php include "includes/header.php" ?>

    <div class="content">
			<div class="row">
						<div class="col-md-4"></div>
							<div class="col-md-4" style="margin-top: 50px;">
									

							<legend><h2>Form Register</h2></legend>

									<form action="" method="POST">

										<div class="form-group">
											<label for="name">Nama Lengkap</label>
											<input class="form-control" type="text" name="name" placeholder="Nama kamu" />
										</div>

										<div class="form-group">
											<label for="username">Username</label>
											<input class="form-control" type="text" name="username" placeholder="Username" />
										</div>

										<div class="form-group">
											<label for="email">Email</label>
											<input class="form-control" type="email" name="email" placeholder="Alamat Email" />
										</div>

										<div class="form-group">
											<label for="password">Password</label>
											<input class="form-control" type="password" name="password" placeholder="Password" />
										</div>

										<center><p>Sudah punya akun? <a href="login.php">Login di sini</a></p></center>
																				

										<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

									</form>
									<p>&larr; <a href="index.php">Home</a>
								</div>
							<div class="col-md-3"></div>
				</div>
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
		
							</div>
						<div class="col-md-3"></div>
						</div>
        <script src="js/jQuery v3.2.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>