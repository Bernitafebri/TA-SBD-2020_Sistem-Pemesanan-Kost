<!-- Hapus data -->
<?php
// include database connection file
include_once("../inc/koneksi.php");

// Get id from URL to delete that user
$memberID = $_GET['memberID'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tb_member WHERE memberID=$memberID");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:Listmember.php");
?>