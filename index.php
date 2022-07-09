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

<div class="container mt-3">

<a href="add.php" class="btn btn-primary btn-md ">Tambah</a>
    <body>
        <table class="table table-striped table-hover table-bordered mt-5">
    <thead class="table-dark">
        <th>NIM</th>
     <th> nama</th>
     <th>jurusan</th>
     <th>alamat</th>
     <th>telepom</th>
     <th>Aksi</th>
    </thead>

    <?php 
    $sqlGet = "SELECT *FROM mahasiswa";
    $query = mysqli_query($conn,$sqlGet);

    while ($data = mysqli_fetch_array($query)){

    echo "
   
    <body>
    <tr>
        <td>$data[nim]</td>
        <td>$data[nama]</td>
        <td>$data[jurusan]</td> 
        <td> $data[alamat]</td>
        <td>$data[telp]</td>
        <td>
       <div class ='row'>
        <div class='col' d-flex justify-content-center>
        <a  href='update.php?nim=$data[nim]' class='btn btn-sm btn-warning'>Update</a>
        </div>
    
        <div class='col'  d-flex justify-content-center>
      <a  href='delete.php?nim=$data[nim]' class='btn btn-sm btn-danger'>Delete</a>
      </div>
             </div>
       
        </td>
    </tr> 
    
    
</body>

    ";
}

    ?>



 </table>

</div>



</body>
</html>