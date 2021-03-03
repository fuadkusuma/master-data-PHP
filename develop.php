
<?php require_once("includes/auth.php"); ?>


<!DOCTYPE html>
<html>
  <head>
  <title>Informatika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
			#table{
				font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}

			#table td, #table th{
				border: 1px solid #ddd;
			padding: 8px;
			}

			#table tr:nth-child(even){
				background-color: #f2f2f2;
			}

			#table tr:hover{
				background-color: #ddd;
				width: 100%;
			}


			#table th{
				padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
			width: 200px;
			}

		.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		max-width: 300px;
		margin: auto;
		text-align: center;
		}

		.title {
		color: grey;
		font-size: 18px;
		}

		button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
		}

		a {
		text-decoration: none;
		
		color: black;
		}

		button:hover, a:hover {
		opacity: 0.7;
		}

</style>

	

  </head>
    <body>
	<?php include "includes/header.php" ?>

	<?php
		include "includes/myclass.php";
		/** QUERY **/
		
		$develop = new Develop();	
	?>

		<?php 
			$arrayDevelop=$develop->tampilDevelop();				
			// looping
			foreach($arrayDevelop as $row) {
			?>

<div class="row">
	<div class="container">
		
		<div class="col-md-3">
				<div class="card">
						<img src="images/user.png" alt="John" style="width:100%">
						<h3><?= $row['nama_dev'] ?> <br> <?= $row['nim'] ?></h3>
						<p class="title">Mahasiswa SKPI</p>
						<p>Institut Teknologi Budi Utomo</p>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<p><button>Contact</button></p>
				</div>
		</div>
		<div class="col-md-9">		
			<table id="table">
				<tr>
					<th>Nama</th>
					
					<td>: <?= $row['nama_dev'] ?></td>
				</tr>

				<tr>
					<th>NIM</th>
					
					<td>: <?= $row['nim'] ?></td>
				</tr>

				<tr>
					<th>Jurusan</th>
					
					<td>: <?= $row['jurusan'] ?></td>
				</tr>

				<tr>
					<th>Fakultas</th>
					
					<td>: <?= $row['fakultas'] ?></td>
				</tr>

				<tr>
					<th>Mata Kuliah</th>
					
					<td>: <?= $row['mata_kuliah'] ?></td>
				</tr>

				<tr>
					<th>Dosen</th>
					
					<td>: <?= $row['dosen'] ?></td>
				</tr>

			</table>          
		</div>

		<?php } ; ?>

	</div>
</div>
              


	<?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
 </HTML>


 