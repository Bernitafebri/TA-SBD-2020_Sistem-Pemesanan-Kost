<?php
// Create database connection using config file
include_once("../inc/koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_komplain ORDER BY komplainID ASC");
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
    <strong id="hello" > Data Komplain </strong><br/><br/>

<table width='100%' border=1>

<tr>
<th>No</th> 
<th>No Bayar</th> 
<th>Nama</th> 
<th>Perihal</th> 
</tr>
<?php  
while($mem_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$mem_data['komplainID']."</td>";
    echo "<td>".$mem_data['bayarID']."</td>";
    echo "<td>".$mem_data['nama']."</td>";
    echo "<td>".$mem_data['perihal']."</td>";        
}
?>
</table>

    <br/><br/>
    <a href="halaman_admin.php"> Kembali </a><br/><br/>
    </div>

    

    <div id="footer">
    <strong>copyright &copy; 2020 by Bernita</strong>
    </div>
</div>


</body>
</html>