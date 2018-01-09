<?php
include 'koneksi.php';

$id=$_GET['id'];

//$sql=mysql_query("DELETE FROM publish WHERE publish.id_berita ='$id' ");
 $sql= "DELETE FROM publish WHERE id_berita ='$id' "; 
  $konek->exec($sql);
 
?>
  <script type="text/javascript">alert('Data berhasil di hapus');  </script>
<?php
  
header('location:listberita.php');

?>