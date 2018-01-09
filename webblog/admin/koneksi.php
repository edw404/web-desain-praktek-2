<?php

$host="mysql:dbname=blog;host=localhost";
$username="root";
$password="";
$server   = "localhost";
$db="blog";
mysql_connect($server,$username,$password) or die ("koneksi gagal");
mysql_select_db($db) or die("Database tidak di temukan");
$konek=new PDO ($host, $username, $password);
