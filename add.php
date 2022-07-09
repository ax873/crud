<?php
include 'koneksi.php';
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

    <a href="index.php" class="href">kembali</a>
    <form action="" method ="post">
    <label for=" nim">nim</label>
    <input type="text" name ="nim" id="nim"class="form-control" >

    <label for=" nama">nama</label>
    <input type="text" name ="nama" id="nama"class="form-control" >

    <label for=" jurusan">jurusan</label>
   <select name="jurusan" id="jurusan" class ="form-select">
    <option >Pilih jurusan</option>
    <option value="information">IT</option>
    <option value="sistem">SI</option>
   </select>
  
   <label for="alamat">alamat</label>
    <input type="text" name ="alamat" id="alamat" class="form-control" >

    <label for="telepon">telp</label>
    <input type="text" name ="telp" id="telepon" class="form-control" >
   


    <input type="submit" class="btn btn-success mt-3" name="tambah"value="tambah">
</form>

    </div>
    
    <?php

    if(isset ($_POST['tambah'])){
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

    $sqlget ="SELECT *FROM mahasiswa where nim='$nim'";
    $queryget =mysqli_query ($conn,$sqlget);
    $cek =mysqli_num_rows($queryget);

    $sqlinser= "INSERT INTO mahasiswa(nim,nama,jurusan,alamat,telp)
    VALUES('$nim','$nama','$jurusan','$alamat','$telp')";
  $queryinser = mysqli_query ($conn, $sqlinser);

  if(isset($sqlinser) && $cek <= 0 ){
echo" <div class='alert alert-success'>Data Berhasil ditambah<a href='index.php'> Lihat data </a></div>
";
  }
  else if($cek>0){
    echo" <div class='alert alert-danger'>Data gagal ditambah<a href='index.php'> Lihat data </a></div>
    ";
  }

   

}
    ?>

    </body>
</html>