<html>
<head>
    <title>Add Data Kost</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
    <a href="Kelola.php">Kembali</a>
    <br/><br/>

    <form action="addKost.php" method="post" name="form1" id="formAdd">
        <table width="40%" border="0">
            <tr> 
                <td>No Kost</td>
                <td><input type="number" name="kostID" class="inputan"></td>
            </tr>
            <tr> 
                <td>Tipe</td>
                <td><input type="text" name="type" class="inputan"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" class="inputan"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="radio" name="status" value="avaiable">Avaiable
                    <input type="radio" name="status" value="not avaiable">Not Avaiable</td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" class="inputan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add" id="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $kostID = $_POST['kostID'];
        $type = $_POST['type'];
        $deskripsi = $_POST['deskripsi'];
        $status = $_POST['status'];
        $harga = $_POST['harga'];

        // include database connection file
        include_once("../inc/koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_kost (kostID, type, deskripsi, status, harga) VALUES('$kostID','$type','$deskripsi','$status', '$harga')");

        // Show message when user added
        echo "Data added successfully";
    }
    ?>
</body>
</html>
