<?php
// Create database connection using config file
include_once("../inc/koneksi.php");
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_member ORDER BY memberID ASC");
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
    <a href="addMember.php">Tambah Member</a><br/><br/>
    <strong id="hello"> Data Member </strong><br/><br/>
    
    <form action="search.php" method="post" margin-bottom="10px">
    <input type="text" name="value_cari" class="inputan">
    <input type="submit" name="cari" value="Cari" >
    </form>
    <table width='100%' border=1>
 
    <tr>
    <th>No</th> 
    <th>Nama Lengkap</th> 
    <th>Alamat</th> 
    <th>Status</th> 
    <th>No. HP</th> 
    <th>Username</th> 
    <th>Password</th> 
    <th>Update</th>
    </tr>
    <?php  
    while($mem_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$mem_data['memberID']."</td>";
        echo "<td>".$mem_data['nama_lengkap']."</td>";
        echo "<td>".$mem_data['alamat']."</td>";
        echo "<td>".$mem_data['status']."</td>";
        echo "<td>".$mem_data['noHP']."</td>";
        echo "<td>".$mem_data['username']."</td>"; 
        echo "<td>".$mem_data['password']."</td>";     
        echo "<td><a href='editMember.php?memberID=$mem_data[memberID]'>Edit</a> 
        | <a href='deleteMember.php?memberID=$mem_data[memberID]'>Delete</a></td></tr>";        
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





