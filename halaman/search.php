<?php
// Create database connection using config file
include("../inc/koneksi.php");

if (isset($_POST['cari'])) {
    $search = $_POST['value_cari'];
    $query = "select * from tb_member where memberID like '%$search%' 
    or alamat like '%$search%' or status like '%$search%' or noHP like '%$search%' 
    or username like '%$search%'";
    $result = mysqli_query($mysqli, $query);
    // $row = mysqli_fetch_array($result);
    // $result = mysqli_query($mysqli, "SELECT * FROM tb_member ORDER BY memberID ASC");
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
    while($row = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$row['memberID']."</td>";
        echo "<td>".$row['nama_lengkap']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td>".$row['noHP']."</td>";
        echo "<td>".$row['username']."</td>"; 
        echo "<td>".$row['password']."</td>";     
        echo "<td><a href='editMember.php?memberID=$row[memberID]'>Edit</a> | <a href='deleteMember.php?memberID=$mem_data[memberID]'>Delete</a></td></tr>";        
    }
    ?>
    </table><br/><br/>
    <a href="Listmember.php"> Kembali </a><br/><br/>
   
</div>
</body>
</html>