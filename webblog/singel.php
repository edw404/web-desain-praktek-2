<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Harian Update</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">


 <div class="header">
 <img src="image/header.png">
 </div>

 <ul class="nav">
    <li>
        <a href="#">What's new</a>
        <div>
     <!--Mega Menu-->
    <div class="nav-column">
    <h3>Home</h3>
    <ul>
        <li><a href="#">Pampers Diapers</a></li>
        <li><a href="#">Huggies Diapers</a></li>
        <li><a href="#">Seventh Generation</a></li>
        <li><a href="#">Diapers</a></li>
        <li><a href="#">Derbies</a></li>
        <li><a href="#">Driving shoes</a></li>
        <li><a href="#">Espadrilles</a></li>
        <li><a href="#">Loafers</a></li>
    </ul>
</div>
 
<div class="nav-column">
    <h3>Home</h3>
    <ul>
        <li><a href="#">Driving shoes</a></li>
        <li><a href="#">Espadrilles</a></li>
        <li><a href="#">Loafers</a></li>
    </ul>
 
    <h3>Home</h3>
    <ul>
        <li><a href="#">Driving shoes</a></li>
        <li><a href="#">Espadrilles</a></li>
        <li><a href="#">Loafers</a></li>
    </ul>
</div>
 
<div class="nav-column">
    <h3>Home</h3>
    <ul>
        <li><a href="#">Pampers Diapers</a></li>
        <li><a href="#">Huggies Diapers</a></li>
        <li><a href="#">Seventh Generation</a></li>
        <li><a href="#">Diapers</a></li>
        <li><a href="#">Derbies</a></li>
        <li><a href="#">Driving shoes</a></li>
        <li><a href="#">Espadrilles</a></li>
        <li><a href="#">Loafers</a></li>
    </ul>
</div>
 
<div class="nav-column">
    <h3 class="orange">Related Categories</h3>
    <ul>
        <li><a href="#">Pampers Diapers</a></li>
        <li><a href="#">Huggies Diapers</a></li>
        <li><a href="#">Diapers</a></li>
    </ul>
 
    <h3 class="orange">Brands</h3>
    <ul>
        <li><a href="#">Driving shoes</a></li>
        <li><a href="#">Espadrilles</a></li>
    </ul>
</div>
        </div>
    </li>
    <li><a href="#">Top rated</a></li>
    <li>
        <a href="#">Earnings</a>

    </li>
    <li><a href="#">Rings</a></li>
    <li><a href="#">Bracelets</a></li>
    <li><a href="#">All Categories</a></li>
    <li class="nav-search">
        <form action="#">
            <input type="text" placeholder="Search...">
            <input type="submit" value="">
        </form>
    </li>
</ul>


 <div class="content">
   <?php
    include 'admin/koneksi.php';
        $id=$_GET['id'];
        $sql= "SELECT *FROM publish where id_berita='$id' ";
                    foreach ($konek->query($sql) as $tampil) : 

   ?>
  <h2><?= $tampil['judul_berita']; ?></h2>
  <p> 
    <?=  $tampil['isi_berita']; ?> </p>
  <a href="index.php" class="previous"> Home </a>
   <?php
        endforeach  
    ?>
   
  </div>

 <div class="main">
  <div class="SB_right">
   <h3>Widget</h3>
    <p>Disini adalah sidebar Kanan </p>
   <h3>Recent Update</h3>
    <ul>
     <li><a href="#">Recent Update Ke-1</a></li>
     <li><a href="#">Recent Update Ke-2</a></li>
     <li><a href="#">Recent Update Ke-3</a></li>
    </ul>
  </div>
 </div>


 <div class="footer">
   <img src="image/footer.png">
 </div>
</div>
</body>
</html>