<?php
// Create database connection using config file
include_once("../inc/koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_bayar ORDER BY bayarID ASC");
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
    <a href="addBayar.php">Tambah Pembayaran</a><br/><br/>
    <strong id="hello"> Data Pembayaran </strong><br/><br/>

    <table width='100%' border=1>
 
    <tr>
    <th>No. Pembayaran</th> <th>No. Pesanan</th> <th>No. Kost</th> <th>Nama Lengkap</th> <th>Nominal</th> <th>Tanggal Pembayaran</th> <th>Status</th><th>Update</th>
    </tr>
    <?php  
    while($pay_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$pay_data['bayarID']."</td>";
        echo "<td>".$pay_data['pesanID']."</td>";
        echo "<td>".$pay_data['kostID']."</td>";
        echo "<td>".$pay_data['nama_lengkap']."</td>";
        echo "<td>".$pay_data['nominal']."</td>";
        echo "<td>".$pay_data['tgl']."</td>";
        echo "<td>".$pay_data['status']."</td>";      
        echo "<td><a href='editBayar.php?bayarID=$pay_data[bayarID]'>Edit</a> | <a href='deleteBayar.php?bayarID=$pay_data[bayarID]'>Delete</a></td></tr>";        
    }
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