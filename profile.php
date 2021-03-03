<?php require_once("includes/auth.php"); ?>
<!DOCTYPE HTML>
 <HTML> 
	 <head>
	 <title>Informatika</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/mycss.css" rel="stylesheet">
	    <?php
			include "includes/myclass.php";
			
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$id = $_SESSION["noid"];
			$myquery="SELECT * FROM users WHERE NoId= '$id'";
			$query = $mysqli->query($myquery);
			//$query = mysqli_query($connection,$strQuery);
		
		?>
	 </head>		
 <body style="background-color: #ffffff">  
	 <div id="container" >
		<?php include "includes/header.php" ?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1>My Profile</h1>
				<form name="mahasiswa" action="?page=profile.php" method="post" >
							<?php if ($row=mysqli_fetch_array($query)) {; ?>
					
										<div class="form-group">
											<label for="name">Nama Lengkap</label>
											<input class="form-control" type="text" name="name" value="<?php echo $row['Name']; ?>" />
										</div>

										<div class="form-group">
											<label for="username">Username</label>
											<input class="form-control" type="text" name="username" value="<?php echo $row['userName']; ?>" />
										</div>

										<div class="form-group">
											<label for="email">Email</label>
											<input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>"/>
										</div>

										<div class="form-group">
											<label for="password">Password</label>
											<input class="form-control" type="password" name="password" value="<?php echo $row['password']; ?>" />
										</div>

										<div class="form-group">
											<input name="submit" type="submit"  value="Save" class="btn btn-success"/>&nbsp;&nbsp;
											<input type="button"  value="Cancel" class="btn btn-warning" onclick=self.history.back()>
										</div>			

						<?php }; ?>
				</form>
			</div><!-- penutup col-md-8-->
			<div class="col-md-2"></div>
				
				
		</div><!-- penutup row -->
		
	</div><!--penutup container -->

		<?php
			if (isset($_POST['submit']))
			{

			// Tampung ke variable
		

			$name = $_POST['name'];
		    $username = $_POST['username'];
		  
    		$password = $_POST['password'];
   			$email = $_POST['email'];
			
			
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$query = "UPDATE users SET
				  Name = '$name', userName = '$username', email = '$email', 
				  password = '$password'  WHERE NoId = '$id'";
			$hasil = $mysqli->query($query);

	
			//Panggil kembali page maasiswa_dislay.php
			echo "<meta http-equiv='Refresh' content='0; URL=login.php'>";
		
			
			}
		
		?>

   <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>