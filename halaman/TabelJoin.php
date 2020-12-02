<?php 
include_once("../inc/koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kost Eunoia</title>
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
        width: 30%;
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
    <?php
    $query = "select a.nama_lengkap, a.alamat, b.durasi, b.tgl_mulai from tb_member a INNER JOIN tb_pesan b on a.memberID = b.memberID;";
    $result = mysqli_query($mysqli, $query);
    ?>
    <table width='100%' border=1>
 
        <tr>
        <th>Nama Lengkap</th> 
        <th>Alamat</th> 
        <th>Durasi</th> 
        <th>Tanggal Mulai</th> 
        </tr>
        <?php  
        while($mem_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$mem_data['nama_lengkap']."</td>";
        echo "<td>".$mem_data['alamat']."</td>";
        echo "<td>".$mem_data['durasi']."</td>";
        echo "<td>".$mem_data['tgl_mulai']."</td>";   
        echo "</tr>";        
    }
    ?>
        </table><br/><br/>


    <br/><br/>
    <a href="halaman_admin.php"> Kembali </a><br/><br/>
    </div>

        
    

    <div id="footer">
    <strong>copyright &copy; 2020 by Bernita</strong>
    </div>
</div>


</body>
</html>