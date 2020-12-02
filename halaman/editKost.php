<?php
// include database connection file
include_once("../inc/koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $kostID = $_POST['kostID'];
    $type = $_POST['type'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $harga = $_POST['harga'];

    // update data
    $result = mysqli_query($mysqli, "UPDATE tb_kost SET type='$type', deskripsi='$deskripsi', status='$status', harga='$harga' WHERE kostID=$kostID");

    // Redirect to homepage to display updated user in list
    header("Location: Kelola.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kostID = $_GET['kostID'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_kost WHERE kostID=$kostID");

while($kost_data = mysqli_fetch_array($result))
{
        $type = $kost_data['type'];
        $deskripsi = $kost_data['deskripsi'];
        $status = $kost_data['status'];
        $harga = $kost_data['harga'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
    <a href="Kelola.php">Views Table</a>
    <br/><br/>
    <div id="formEdit">
    <form name="update_user" method="post" action="editKost.php" >
        <strong id="edit"> Edit Data Kost </strong>
        <table border="0">
            <tr> 
                <td>Tipe</td>
                <td><input type="text" name="type" value=<?php echo $type;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status" value=<?php echo $status;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kostID" value=<?php echo $_GET['kostID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
