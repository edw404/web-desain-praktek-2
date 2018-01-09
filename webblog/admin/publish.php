<?php
include 'koneksi.php';
$id=$_GET['id'];

//$sql=("INSERT INTO publish SELECT  *FROM draft WHERE id_berita='$id'");
 $sql= "INSERT INTO publish SELECT *FROM draft WHERE id_berita ='$id' "; 
  $konek->exec($sql);

  //echo "string ".$konek;
  if ($konek) {
  	$sql= "DELETE FROM draft WHERE id_berita ='$id' "; 
  		$konek->exec($sql);

  		header('location:listberita.php');
  }

  

?>