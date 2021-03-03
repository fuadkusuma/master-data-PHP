<?php require_once("includes/auth.php"); ?>
<!DOCTYPE HTML>
 <HTML> 
   <head>
    <title>Informatika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">

	<style>
		#myInput {
			background-image: url('/css/searchicon.png'); /* Add a search icon to input */
			background-position: 10px 12px; /* Position the search icon */
			background-repeat: no-repeat; /* Do not repeat the icon image */
			width: 100%; /* Full-width */
			font-size: 16px; /* Increase font-size */
			padding: 12px 20px 12px 40px; /* Add some padding */
			border: 1px solid #ddd; /* Add a grey border */
			margin-bottom: 12px; /* Add some space below the input */
		}	

		#myTable th, #myTable td {
			text-align: left; /* Left-align text */
			padding: 12px; /* Add padding */
		}

		.pagination a{
			color: black;
			float: left;
			padding: 8px 16px;
			text-decoration: none;
			}
	</style>

	
    <?php
		include "includes/myclass.php";
		/** QUERY **/
		
		$guru = new Guru();
		
	?>
  </head>
 <body>  
 	<!-- Memanggil file header.php yang akan ditampilkan --> 
 	<?php include "includes/header.php" ?>

<div class="container">
<ol class="breadcrumb">
  <li class="active">Data Master</a></li> 
  <li class="active">Data Guru</li>
</ol>
</div>
	 <div id="container" >
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			<div class="mystyle" style="float:right; margin-top:30px;">
			<a href="guru_add.php" class="btn btn-primary">Tambah Data guru</a>
				   </div>
						
				   
				<h1>Data Guru</h1>
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pencarian..">
					<table class="table table-striped table-bordered" id="myTable">
						<thead>
							<tr class="header">
								<th>NIP</th>
								<th>NAMA GURU</th>
                                <th>JENIS KELAMIN</th>
                                <th>AGAMA</th>
								<th>STATUS KAWIN</th>
								<th>PENDIDIKAN TERAKHIR</th>
								<th>JURUSAN</th>
								<th>TAHUN LULUS</th>
								<th width="150px" style="text-align: center;">AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php 

							$halperpage = 5;

							$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      
							$mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;
							
							$total=$guru->JumlahDataGuru();

						    $pages = ceil($total/$halperpage);  


							$arrayGuru=$guru->tampilGuruSemua($mulai, $halperpage);

							foreach($arrayGuru as $row) {
							?>
	
								<tr>
									<td><?php echo $row['nip']; ?></td>
									<td><?php echo $row['nama_guru']; ?> </td>
                                    <td><?php echo $row['jenis_kelamin']; ?> </td>
                                    <td><?php echo $row['agama']; ?></td>
									<td><?php echo $row['status_kawin']; ?></td>
									<td><?php echo $row['pendidikan_terakhir']; ?></td>
									<td><?php echo $row['jurusan'] ;?></td>				
									<td><?php echo $row['thn_lulus'] ;?></td>				
									<td style="text-align: center;">
										
										<a href="guru_edit.php?id_guru=<?php echo $row['id_guru'];?>" class ="btn btn-success">
										<img src="images/ico_edit.gif" class="ico" border="0" title="Edit" />
										</a>
										
										
										<a href="guru_del.php?id_guru=<?php echo $row['id_guru'];?>" class="btn btn-danger">
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

	<!-- javascript pencarian berdasarkan nama -->
	<script>
			function myFunction() {
			// Declare variables
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
				}
			}
			}
	</script>


 </body>
</html>
