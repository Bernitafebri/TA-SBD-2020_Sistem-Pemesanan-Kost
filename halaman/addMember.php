<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
    <a href="Listmember.php">Kembali</a>
    <br/><br/>
<fieldset> 
    <legend>Tambah Data</legend>
    <form action="addMember.php" method="post" name="form1" id="formAdd">
        <table width="80%" border="0" >
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" class="inputan"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" class="inputan"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="radio" name="status" value="active">Active
                    <input type="radio" name="status" value="not active">Not Active</td>
            </tr>
            <tr> 
                <td>No. HP</td>
                <td><input type="text" name="noHP" class="inputan"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" class="inputan"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" class="inputan"></td>
            </tr>
            <tr> 
                <td><input type="submit" name="Submit" value="Add" id="Add"></td>
            </tr>
        </table>
    </form>
    <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $noHP = $_POST['noHP'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // include database connection file
        include_once("../inc/koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_member ( nama_lengkap, alamat, status, noHP, username, password) 
        VALUES('$nama_lengkap','$alamat','$status', '$noHP','$username','$password' )");
        
        // Show message when user added
        echo "Data added successfully";
    }
    ?>
<fieldset>
</body>
</html>
