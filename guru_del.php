<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['id_guru']))
{
		$guruDel = new Guru();
		// baca ID dari parameter guru yang akan dihapus
		$id = $_GET['id_guru'];
		// proses hapus data  guru berdasarkan idvia method
		$guruDel->hapusGuru($id);	


	//header("Location:guru_display.php");
	echo "<meta http-equiv='Refresh' content='5; URL=guru_display.php'>";
}
?>
