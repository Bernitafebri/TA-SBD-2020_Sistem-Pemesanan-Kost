<?php
// Create database connection using config file
include_once("../inc/koneksi.php");

// Fetch all users data from database

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Kost</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <style> 
        input[type=text] {
        width: 100px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        background-color: white;
        background-image: url('../asset/loupe.png');
        background-size: 15px;
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 8px 8px 8px 40px;
        transition: width 0.4s ease-in-out;
        margin: 10px;
        }

        input[type=text]:focus {
        width: 100%;
        }
        </style>
    
</head>
<body>
<div id="container">
    <div id="header">
    <strong>KOST EUNOIA</strong>
    </div>

    <div id="menu">
    <ul>
        <li class="utama"><a href="Kelola.php">Kelola Kost</a></li>
        <li class="utama"><a href="Listpesanan.php">Pesanan</a></li>
        <li class="utama"><a href="Listpembayaran.php">Pembayaran</a></li>
        <li class="utama"><a href="Listmember.php">Member</a></li>
        <li class="utama"><a href="Listkomplain.php">Daftar komplain</a></li>
        <li class="utama"><a href="TabelJoin.php">Tabel Join</a></li>
    <li class="utama"><a href="logout.php">Logout</a></li>
    </ul>
    </div>  

    <div id="isi">
    <a href="addKost.php">Tambah Data</a><br/><br/>
    <strong id="data"> Data Kost </strong><br/><br/>

    <form action="Kelola.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
        </form>

        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b>";
        }
    ?>
        
    <tr>
        <th>No Kost</th> 
        <th>Tipe</th> 
        <th>Deskripsi</th> 
        <th>Status</th> 
        <th>Harga</th> 
        <th>Update</th>
    </tr>
    <?php
    if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
        // $data = mysql_query("select * from mhs where nama like '%".$cari."%'");

        $result = mysqli_query($mysqli, "SELECT * FROM `tb_kost` WHERE kostID like '%.$cari.%' deskripsi like '%$.$cari.%' or harga like '%$.$cari.%' or status like '%$.$cari.%' or type like '%$.$cari.%'");				
	}else{
        // $data = mysql_query("select * from mhs");
        $result = mysqli_query($mysqli, "SELECT * FROM tb_kost");		
	}
    
    while($kost_data = mysqli_fetch_array($result)) 
    {
        ?>
        <tr>
            <td><?php echo $kost_data['kostID']; ?></td>
            <td><?php echo $kost_data['type']; ?></td>
            <td><?php echo $kost_data['deskripsi']; ?></td>
            <td><?php echo $kost_data['status']; ?></td>
            <td><?php echo $kost_data['harga']; ?></td>
        </tr>
        <?php }
    ?>
    </table><br/><br/>
    <a href="halaman_admin.php"> Kembali </a><br/><br/>
</div>

<div id="footer">
    <strong>copyright &copy; 2020 by Bernita</strong>
    </div>
</div>


</body>
</html>
echo "<td><a href='editKost.php?kostID=$kost_data[kostID]'>Edit</a> | <a href='deleteKost.php?kostID=$kost_data[kostID]'>Delete</a></td></tr>";        
    }

