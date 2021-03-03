<!DOCTYPE HTML>
 <HTML> 
   <head>
   <title>Informatika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">

    <?php require_once("includes/auth.php"); ?> 

    <style>
        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow:  0px 0px 0px 0px #000;
                    box-shadow:  0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
            width:inherit; /* Or auto */
            padding:0 10px; /* To give a bit of padding on the left and right */
            border-bottom:none;
        }

        .btn{
            float: right;
            margin: 2px;

        }
    </style>
  
  </head>
			<script>
				function checkForm(formZ){
					if(formZ.nisn.value==''){
						alert('NISN tidak boleh kosong.');
						formZ.nisn.focus();
						return false;
					}

                    if(formZ.nama_siswa.value==''){
						alert('Nama Siswa tidak boleh kosong.');
						formZ.nama_siswa.focus();
						return false;
					}
					if(formZ.jenis_kelamin.value==''){
						alert('Jenis Kelamin tidak boleh kosong.');
						formZ.jenis_kelamin.focus();
						return false;
					}
			
					if(formZ.agama.value==''){
						alert('Agama tidak boleh kosong.');
						formZ.agama.focus();
						return false;
					}

					if(formZ.tempat.value==''){
						alert('Tempat lahir tidak boleh kosong.');
						formZ.tempat.focus();
						return false;
					}
					if(formZ.tgl.value==''){
						alert('Tanggal lahir tidak boleh kosong.');
						formZ.tgl.focus();
						return false;
					}
			
					if(formZ.alamat.value==''){
						alert('Alamat tidak boleh kosong.');
						formZ.alamat.focus();
						return false;
					}
                    if(formZ.kelas.value==''){
						alert('kelas tidak boleh kosong.');
						formZ.kelas.focus();
						return false;
					}					
				}
			</script>
 <body style="background-color: #ffffff">  
	 <div id="container">
		<?php include "includes/header.php" ?>			
		
			<div class="col-md-2"></div>
            <div class="col-md-8" style="margin-top: 50px;">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Add Siswa</legend>    
                <form name="siswa" action="?page=siswa_add" method="post" onsubmit="return checkForm(this)">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                            <div class="col-sm-8">
                                <input type="text" name="nisn" class="form-control" id="nisn"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Siswa</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_siswa" class="form-control" id="nama"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select class="form-group" name="jenis_kelamin" id="jenis_kelamin" style="width: 100%;">
                                    <option value="laki-laki">Laki-laki</option>​
                                    <option value="perempuan">Perempuan</option>​
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <select class="form-group" name="agama" id="agama" style="width: 100%;">
                                    <option value="islam">Islam</option>​
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="bhuda">Bhuda</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group row">
                            <label for="tempat" class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" name="tempat" class="form-control" id="tempat"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" name="tgl" class="form-control" id="start" min="1995-01-01" max="<?php echo date("Y/m/d") ?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                                <select class="form-group" name="kelas" id="kelas" style="width: 100%;">
                                <?php
                                    $batas=6;
                                    for ($a=1;$a<=$batas;$a++)
                                    {
                                        echo "<option value='$a'>$a</option>";
                                    }
                                ?>
                                </select>
                            </div>
                        </div>                        
                    

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"></textarea>
                            </div>
                        </div>

                            
                            <div class="form-group">
                                <input name="submit" type="submit"  value="Save" class="btn btn-success"/>&nbsp;&nbsp;
                                <input type="button"  value="Cancel" class="btn btn-warning" onclick=self.history.back()>
                            </div>			
                        </div><!-- penutup col-md-4 -->
                </form>
				</fieldset>
            </div>
            
			<div class="col-md-2"></div>
		
	
	</div><!-- penutup container -->

		<?php
		if (isset($_POST['submit']))
		{
			 
			include "includes/myclass.php";
			$siswa = new Siswa();


			// Tampung ke variable
			$nisn = $_POST['nisn'];
			$nama_siswa =$_POST['nama_siswa'];
            $jenis_kelamin =$_POST['jenis_kelamin'];
            $agama =  $_POST['agama'];
			$tempat = $_POST['tempat'];
			$tgl = $_POST['tgl'];
			$alamat = $_POST['alamat'];
			$kelas = $_POST['kelas'];
			

			$siswa->tambahDataSiswa( $nisn, $nama_siswa, $jenis_kelamin, $agama, $tempat, $tgl,  $alamat, $kelas) ;
	

			 echo "Data Siswa  sudah di ditambahkan";
			 //panggil kembali page Siswa_display.php
			 echo "<meta http-equiv='Refresh' content='2; URL=siswa_display.php'>";
		 	 
		}
		?>
   <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>











