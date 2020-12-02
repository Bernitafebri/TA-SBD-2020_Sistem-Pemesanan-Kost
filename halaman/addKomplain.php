<!DOCTYPE html>
<html>
<head>
    <title>Kost Eunoia</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
    <div class="kotak">
    <a href="halaman_member.php"> Kembali </a><br/><br/>
    <h3>Masukkan Komplain</h3>

    
        <form action="addKomplain.php" method="post">
        <table width="100%" border="0">
            <!-- <tr> 
                <td  width="120">No Pembayaran</td>
                <td><input type="text" name="bayarID" class="inputan">
                </td>
            </tr> -->
            <tr> 
                <td  width="120">Nama</td>
                <td><input type="text" name="nama" class="inputan"></td>
            </tr>
            <tr> 
                <td  width="120">Perihal</td>
                <td><input type="textarea" name="perihal" class="inputan"></td>
            </tr>
            </table>
            <input type="submit" value="Submit"  width="120">
        </form>

        <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $bayarID = $_POST['bayarID'];
    $nama = $_POST['nama'];
    $perihal = $_POST['perihal'];

    // include database connection file
    include_once("../inc/koneksi.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO tb_komplain ( bayarID, nama, perihal) 
    VALUES('$bayarID',$nama','$perihal')");

    // Show message when user added
    echo "Data added successfully";
}
?>
    </div>
    
   
</body>
</html>