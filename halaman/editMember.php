<?php
// include database connection file
include_once("../inc/koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $memberID = $_POST['memberID'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $noHP = $_POST['noHP'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // update data
    $result = mysqli_query($mysqli, "UPDATE tb_member SET nama_lengkap='$nama_lengkap', 
    alamat='$alamat', status='$status', noHP='$noHP', username='$username', password='$password' WHERE memberID=$memberID");

    // Redirect to homepage to display updated user in list
    header("Location: Listmember.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$memberID = $_GET['memberID'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_member WHERE memberID=$memberID ");

while($mem_data = mysqli_fetch_array($result))
{
        $nama_lengkap = $mem_data['nama_lengkap'];
        $alamat = $mem_data['alamat'];
        $status = $mem_data['status'];
        $noHP = $mem_data['noHP'];
        $username = $mem_data['username'];
        $password = $mem_data['password'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
    <a href="Listmember.php">Views Table</a>
    <br/><br/>
    <div id="formEdit">
    <form name="update_data" method="post" action="editMember.php" >
        <strong id="edit"> Edit Data Kost </strong>
        <table border="0">
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value=<?php echo $nama_lengkap;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status" value=<?php echo $status;?>></td>
            </tr>
            <tr> 
                <td>No. HP</td>
                <td><input type="text" name="noHP" value=<?php echo $noHP;?>></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="memberID" value=<?php echo $_GET['memberID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
