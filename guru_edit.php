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

<script>
				function checkForm(formZ){
					if(formZ.nip.value==''){
						alert('NIP tidak boleh kosong.');
						formZ.nip.focus();
						return false;
					}

                    if(formZ.nama_guru.value==''){
						alert('Nama Guru tidak boleh kosong.');
						formZ.nama_guru.focus();
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

					if(formZ.status_kawin.value==''){
						alert('Status Kawin tidak boleh kosong.');
						formZ.status_kawin.focus();
						return false;
					}
					if(formZ.pendidikan_terakhir.value==''){
						alert('Pendidikan Terakhir tidak boleh kosong.');
						formZ.pendidikan_terakhir.focus();
						return false;
					}
			
					if(formZ.jurusan.value==''){
						alert('Jurusan tidak boleh kosong.');
						formZ.jurusan.focus();
						return false;
					}
                    if(formZ.thn_lulus.value==''){
						alert('Tahun Lulus tidak boleh kosong.');
						formZ.thn_lulus.focus();
						return false;
					}					
				}
			</script>

		<?php
			
			include "includes/myclass.php";
			$guru = new Guru();
			if (isset($_GET['id_guru']))
					{
						$id = $_GET['id_guru'];
					}else{
						header("Location:index.php");
					}
		
		?>
 
</head>		
 <body style="background-color: #ffffff">  
	 <div id="container" >
		<?php include "includes/header.php" ?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="margin-top: 50px;">

            <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Edit Guru</legend>    
                <form name="guru" action="?page=Guru_edit" method="post" onsubmit="return checkForm(this)">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                            <div class="col-sm-8">
                                <input type="text" name="nip" class="form-control" id="nip" value="<?php echo $guru->bacaDataGuru('nip', $id); ?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Guru</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_guru" class="form-control" id="nama" value="<?php echo $guru->bacaDataGuru('nama_guru', $id); ?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select class="form-group" name="jenis_kelamin" id="jenis_kelamin" style="width: 100%;" value="<?php echo $guru->bacaDataGuru('jenis_kelamin', $id); ?>">
                                <option value="<?php echo $guru->bacaDataGuru('jenis_kelamin', $id); ?>"><?php echo $guru->bacaDataGuru('jenis_kelamin', $id); ?></option>
                                    <option value="laki-laki">Laki-laki</option>​
                                    <option value="perempuan">Perempuan</option>​
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <select class="form-group" name="agama" id="agama" style="width: 100%;" value="<?php echo $guru->bacaDataGuru('agama', $id); ?>">
                                <option value="<?php echo $guru->bacaDataGuru('agama', $id); ?>"><?php echo $guru->bacaDataGuru('agama', $id); ?></option>
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
                            <label for="status_kawin" class="col-sm-4 col-form-label">Status Kawin</label>
                            <div class="col-sm-8">
                            <select class="form-group" name="status_kawin" id="status_kawin" style="width: 100%;" value="<?php echo $guru->bacaDataGuru('status_kawin', $id); ?>">
                                <option value="<?php echo $guru->bacaDataGuru('status_kawin', $id); ?>"><?php echo $guru->bacaDataGuru('status_kawin', $id); ?></option>
                                    <option>Kawin</option>​
                                    <option>Belum Kawin</option>​
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pendidikan_terakhir" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-8">
                            <select class="form-group" name="pendidikan_terakhir" id="pendidikan_terakhir" style="width: 100%;" value="<?php echo $guru->bacaDataGuru('pendidikan_terakhir', $id); ?>">
                                <option value="<?php echo $guru->bacaDataGuru('pendidikan_terakhir', $id); ?>"><?php echo $guru->bacaDataGuru('pendidikan_terakhir', $id); ?></option>
                                <option>SMA/Sederajat</option>
                                    <option>D2/D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-4 col-form-label">Jurusan</label>
                            <div class="col-sm-8">
                                <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?php echo $guru->bacaDataGuru('jurusan', $id); ?>"/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="thn_lulus" class="col-sm-4 col-form-label">thn_lulus</label>
                            <div class="col-sm-8">
                                <select class="form-group" name="thn_lulus" id="thn_lulus" style="width: 100%;" value="<?php echo $guru->bacaDataGuru('thn_lulus', $id); ?>">
                                <option value="<?php echo $guru->bacaDataGuru('thn_lulus', $id); ?>"><?php echo $guru->bacaDataGuru('thn_lulus', $id); ?></option>
                                <?php
                                    $lulus=2021;
                                    for ($a=2000;$a<=$lulus;$a++)
                                    {
                                        echo "<option value='$a'>$a</option>";
                                    }
                                ?>
                                </select>
                                </select>
                            </div>
                        </div>                        
                    
                            
                            <div class="form-group">
                                <input name="submit" type="submit"  value="Save" class="btn btn-success"/>&nbsp;&nbsp;
                                <input type="button"  value="Cancel" class="btn btn-warning" onclick=self.history.back()>
                            </div>			
                        </div><!-- penutup col-md-4 -->
                </form>
				</fieldset>

			</div><!-- penutup col-md-8-->
			<div class="col-md-2"></div>
				
				
		</div><!-- penutup row -->
		
	</div><!--penutup container -->

		<?php
			if (isset($_POST['submit']))
			{

		

			// Tampung ke variable
			$nip = $_POST['nip'];
			$nama =$_POST['nama_guru'];
            $jenis_kelamin =$_POST['jenis_kelamin'];
            $agama =  $_POST['agama'];
			$status_kawin = $_POST['status_kawin'];
			$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
			$jurusan = $_POST['jurusan'];
			$thn_lulus = $_POST['thn_lulus'];

			$guru->updateDataGuru($nip, $nama, $jenis_kelamin, $agama, $status_kawin, $pendidikan_terakhir,  $jurusan, $thn_lulus);

            echo "Data Guru  sudah di diupdate";
            //panggil kembali page Guru_display.php
            echo "<meta http-equiv='Refresh' content='2; URL=Guru_display.php'>";
			}
		
		?>

   <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
