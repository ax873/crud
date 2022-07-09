<?php
include 'koneksi.php';

$nim=$_GET['nim'];
$sqlgetup="SELECT * FROM mahasiswa where nim = '$nim'";
$queryget = mysqli_query($conn,$sqlgetup);
$data= mysqli_fetch_array($queryget);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Aplikasi Crud </title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-3">

    <a href="update.php" class="href">kembali</a>
    <form action="" method ="post">
    <label for=" nim">nim</label>
    <input type="text" name ="nim" value ="<?php echo"$data[nim]";?>" id="nim"class="form-control" readonly >

    <label for=" nama">nama</label>
    <input type="text" name ="nama"value ="<?php echo"$data[nama]";?>"  id="nama"class="form-control" >

    <label for=" jurusan">jurusan</label>
   <select name="jurusan" id="jurusan" class ="form-select">
    <option ><?php echo"$data[jurusan]";?> </option>
    <option value="information">IT</option>
    <option value="sistem">SI</option>
   </select>
  
   <label for="alamat">alamat</label>
    <input type="text" name ="alamat" value ="<?php echo"$data[alamat]";?>" id="alamat" class="form-control" >

    <label for="telepon">telp</label>
    <input type="text" name ="telp" value ="<?php echo"$data[telp]";?>"  id="telepon" class="form-control" >
   


    <input type="submit" class="btn btn-success mt-3" name="update"value="update">
</form>

    </div>
    
    <?php

    if(isset ($_POST['update'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
   
$jurusanselect =$_POST['jurusan'];
if($jurusanselect=='information'){
    $jurusan='TI';
}
if($jurusanselect=='sistem'){
    $jurusan='SI';
}

   

$sqlupdate="UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan',alamat='$alamat',telp='$telp'
where nim='$nim'";


    $queryudate =mysqli_query ($conn,$sqlupdate);
   header ("Location: index.php");

   

}
    ?>

    </body>
</html>