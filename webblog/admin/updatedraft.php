<?php
include 'koneksi.php';
$judul=$_POST['judul'];
$kategori=$_POST['kategori'];
$isi=$_POST['isi'];

$id=$_POST['id'];

if (isset($_POST['update'])) {
	$sql= "UPDATE draft SET judul_berita = '$judul', kategori = '$kategori' , isi_berita = '$isi'  WHERE id_berita = '$id'"; 
	$konek->exec($sql);
	
?>
	<script type="text/javascript">alert('Data berhasil di ubah');  </script>
<?php
	header('location:draft.php');
}
	


?>