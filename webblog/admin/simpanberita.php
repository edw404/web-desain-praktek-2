<?php
include 'koneksi.php';
  $judul=$_POST['judul'];
  $Kategori=$_POST['Kategori'];
  $isi=$_POST['isi'];


  if (isset($_POST['simpan'])) {
    $sql="INSERT INTO draft VALUES ('','$judul', '$Kategori', '$isi')";
    $konek->exec($sql);

    ?>
     <script type="text/javascript">alert('Data berhasil di simpan ke draft'); window.location.href="draft.php"</script>
    <?php

    
}
  elseif (isset($_POST['publish'])) {
  	$sql="INSERT INTO publish VALUES ('','$judul', '$Kategori', '$isi')";
    $konek->exec($sql);
     ?>
     <script type="text/javascript">alert('Data berhasil di publish'); window.location.href="listbertia.php"</script>
    <?php
  }
  
?>