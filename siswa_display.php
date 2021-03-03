<?php require_once("includes/auth.php"); ?>
<!DOCTYPE HTML>
 <HTML> 
   <head>
    <title>Informatika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <?php
		include "includes/myclass.php";
		/** QUERY **/
		
		$siswa = new Siswa();
		
	?>
  </head>
 <body>  
 	<!-- Memanggil file header.php yang akan ditampilkan --> 
 	<?php include "includes/header.php" ?>

<div class="container">
<ol class="breadcrumb">
  <li class="active">Data Master</a></li> 
  <li class="active">Data Siswa</li>
</ol>
</div>
	 <div id="container" >
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			<div class="mystyle" style="float:right; margin-top:30px;">
						<a href="siswa_add.php" class="btn btn-primary">Tambah Data Siswa</a>
				   </div>
				<h1>Data Siswa</h1>
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>NISN</th>
								<th>NAMA SISWA</th>
                                <th>JENIS KELAMIN</th>
                                <th>AGAMA</th>
								<th>TEMPAT, TGL LAHIR</th>
								<th>ALAMAT</th>
								<th>KELAS</th>
								<th width="150px" style="text-align: center;">AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php 

							$halperpage = 5;

							$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      
							$mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;
							
							$total=$siswa->JumlahDataSiswa();

						    $pages = ceil($total/$halperpage);  


							$arraySiswa=$siswa->tampilSiswaSemua($mulai, $halperpage);

							foreach($arraySiswa as $row) {
							?>
	
								<tr>
									<td><?php echo $row['nisn']; ?></td>
									<td><?php echo $row['nama_siswa']; ?> </td>
                                    <td><?php echo $row['jenis_kelamin']; ?> </td>
                                    <td><?php echo $row['agama']; ?></td>
									<td><?php echo $row['tempat']; ?>, <?php echo $row['tgl'];  ?></td>
									<td><?php echo $row['alamat']; ?></td>
									<td><?php echo $row['kelas'] ;?></td>				
									<td style="text-align: center;">
										
										<a href="siswa_edit.php?id_siswa=<?php echo $row['id_siswa'];?>" class ="btn btn-success">
										
										<img src="images/ico_edit.gif" class="ico" border="0" title="Edit" />
										</a>
										
										<a href="siswa_del.php?id_siswa=<?php echo $row['id_siswa'];?>" class="btn btn-danger">
										<img src="images/ico_del.gif" class="ico" border="0" title="Hapus" onClick="return confirm('Apakah Anda Yakin?');"/>
										</a>
		
									</td>
								</tr>
							<?php } ; ?>
						</tbody>
					</table>

					<div class="pagination">
					<a href="#">&laquo;</a>
						<?php for ($i=1; $i<=$pages ; $i++){ ?>
							
							<a class="btn btn-md" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
							
						<?php } ?>
						<a href="#">&raquo;</a>
					</div>
					

                   
			</div><!-- Penutup div   col-md-8 --> 
			<div class="col-md-1"></div>
		</div><!-- Penutup div  row --> 
	</div><!-- Penutup div "container --> 

	<!-- memanggil file footer.php untuk menampilkan footer --> 
    <?php include "includes/footer.php" ?>

    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>	 

 </body>
</html>
