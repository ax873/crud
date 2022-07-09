<?php
include 'koneksi.php';

$nim =$_GET ['nim'];
$sqldelete ="DELETE FROM mahasiswa WHERE nim='$nim'";

mysqli_query($conn,$sqldelete);
header("Location: index.php");
?>