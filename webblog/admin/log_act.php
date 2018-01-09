<?php
include 'koneksi.php';
session_start();
$username=$_POST['username'];
$pass=$_POST['password'];

$sql=$konek->prepare("SELECT username, password FROM user WHERE  username= ? ");

$sql->execute(array($username));
$hasil= $sql->fetch();

if ($sql->rowCount()==0) {
	?>
		<script type="text/javascript">alert('Maaf akun anda tidak ada'); window.location.href="index.php" </script>
	<?php
}

else {
	if ($pass <> $hasil['password']) {
		?>
		<script type="text/javascript">alert('Password yang anda masukan salah. . .'); window.location.href="index.php" </script>
		<?php
	}
	else {
		$SESSION_['username']=$hasil['username'];
		?>
			<script type="text/javascript">alert('Berhasil login'); window.location.href="home.php"</script>
		<?php
	}
}
