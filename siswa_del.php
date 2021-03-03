<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['id_siswa']))
{
		$siswaDel = new Siswa();
		// baca ID dari parameter Siswa yang akan dihapus
		$id = $_GET['id_siswa'];
		// proses hapus data  Siswa berdasarkan idvia method
		$siswaDel->hapusSiswa($id);	


	//header("Location:Siswa_display.php");
	echo "<meta http-equiv='Refresh' content='5; URL=siswa_display.php'>";
}
?>
