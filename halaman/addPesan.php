<html>
<head>
    <title>Add Pesan</title>
    <style> 
    .kotakpesan{
        border: 1px solid black;
        width:60%;
        align:center;
        outline-style: dotted;
        outline-color: blue;
        margin-left: 50px;
    }
    #Add{
        margin-top:10px;
    }
    #formAdd{
        padding: 10px;
    }
    h2{
        text-align: center;
    }
    </style>

</head>

<body>
    <a href="halaman_member.php">Kembali</a>
    <br/><br/>
<div class="kotakpesan">
<h2>Pesan Kost</h2>
    <form action="addPesan.php" method="post" name="form1" id="formAdd">
        <table width="70%" border="0">
            <tr> 
                <td>MemberID</td>
                <td><input type="text" name="memberID" class="inputan"></td>
            </tr>
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" class="inputan"></td>
            </tr>
            <tr> 
                <td>Durasi</td>
                <td>
                <!-- <input type="text" name="durasi" class="inputan"> -->
                    <input type="radio" name="durasi" value="1 bulan">1 bulan
                    <input type="radio" name="durasi" value="3 bulan">3 bulan
                    <input type="radio" name="durasi" value="6 bulan">6 bulan
                    <input type="radio" name="durasi" value="12 bulan">12 bulan
                </td>
            </tr>
            <tr> 
                <td>Tanggal Mulai</td>
                <td><input type="text" name="tgl_mulai" ></td>
            </tr>
            <tr> 
                <td>No Kost</td>
                <td>
                <input type="number" name="kostID" class="inputan">
                </td>
            </tr>
            </table >
            <input type="submit" name="Submit" value="Add" id="Add" >
    
    </form>
</div>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $kostID = $_POST['kostID'];
        $memberID = $_POST['memberID'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $durasi = $_POST['durasi'];
        $tgl_mulai = $_POST['tgl_mulai'];

        // include database connection file
        include_once("../inc/koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_pesan (kostID, nama_lengkap, durasi, tgl_mulai) 
        VALUES('$kostID','$nama_lengkap','$durasi', '$tgl_mulai')");

        // Show message when user added
        echo "Data added successfully";
        }
    ?>
</body>
</html>
