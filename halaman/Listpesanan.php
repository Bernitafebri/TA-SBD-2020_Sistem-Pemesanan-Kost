<?php
// Create database connection using config file
include_once("../inc/koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_pesan ORDER BY pesanID ASC");
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
    <strong id="data"> Data Pesanan </strong><br/><br/>

    <table width='100%' border=1>
 
    <tr>
    <th>No</th> <th>No Kost</th> <th>memberID</th> <th>Nama Lengkap</th> <th>Durasi</th> <th>Tanggal Mulai</th> <th>Update</th>
    </tr>
    <?php  
    while($req_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$req_data['pesanID']."</td>";
        echo "<td>".$req_data['kostID']."</td>";
        echo "<td>".$req_data['memberID']."</td>";
        echo "<td>".$req_data['nama_lengkap']."</td>";
        echo "<td>".$req_data['durasi']."</td>";
        echo "<td>".$req_data['tgl_mulai']."</td>";    
        echo "<td><a href='editPesan.php?memberID=$req_data[memberID]'>Edit</a> | <a href='deletePesan.php?memberID=$req_data[memberID]'>Delete</a></td></tr>";        
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


