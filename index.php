<?php
@session_start();
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kost Eunoia</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="style.css"> 
    
</head>
<body>
<div id="container">
    <div id="header">
    <strong>KOST EUNOIA</strong>
    </div>

    <div id="menu">
    <ul>
        <li class="utama"><a href="index.php?page=home">Home</a></li>
        <li class="utama"><a href="halaman/rlogin.php">Login</a></li>
    </ul>
    </div>

    <div id="isi">
    <?php 
  	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/rhome.php";
				break;
			case 'login':
				include "halaman/rlogin.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/rhome.php";
	}

	 ?>
    </div>

    <div id="footer">
    <strong>copyright &copy; 2020 by Bernita</strong>
    </div>
</div>


</body>
</html>
