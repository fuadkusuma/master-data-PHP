
<?php 
// KONEKSI KE DATA BASE DENGNA MENGGUNAKAN PDO
require_once("includes/myclass.php");

if(isset($_POST['login'])){
  
   
    // ambil data dari form login
    $username = $_POST['username']; 

	

    // ambil data dari database
	$user = new Login();
 
	$data=$user->CheckLogin($username);

    // bandingkan password yang dikirim dari form login dengan password
    // yang ada di database
         foreach($data as $row) {
                $pass = $row['password'];
                $id = $row['NoId'];
             }

    
if ($_POST['password']==$pass)

  

    {
        session_start();
            foreach($data as $row) {
                $_SESSION["user"] = $pass;
                $_SESSION["noid"] = $id;
             }
           // login sukses, alihkan ke halaman timeline
           header("Location: index.php");  
       
    } else {
        // login gagal
    }
	
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Informatika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
<body class="bg-light">
 
    <?php include "includes/header.php" ?>
    <div class="container">
        <div class="row">
            
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin-top: 100px;">
            <legend><h2>Form Login</h2></legend>
                
                <form action="" method="POST">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                        
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>
                
                    <center>Belum punya akun? <a href="register.php" style="margin-top: -10px;">Daftar di sini</a></center>
                    <br>

                    <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

                </form>
         
             </div> 
             <div class="col-md-4"></div>       
        </div> 
    </div>
    
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>  
</body>
</html>

