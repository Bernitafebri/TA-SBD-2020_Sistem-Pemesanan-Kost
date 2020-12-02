<?php
@session_start();
// include database connection file
include("../inc/koneksi.php");


if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
}else{
	$username = '';
	$password = '';
}

$login = mysqli_query($mysqli,"select * from tb_login where username='$username' and password= md5('$password')");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_array($login);
	
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="member"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "member";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_member.php");

	// cek jika user login sebagai pengurus
	}else{

		echo ("error");
	}	
}
?>
<html>
<body>
<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="rlogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" name="login" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
</div>
</body>


</html>

