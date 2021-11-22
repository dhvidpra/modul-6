<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "koneksi.php";

    $qry_get_petugas=mysqli_query($conn,"select * from petugas where

id_petugas = '".$_GET['id_petugas']."'");

    $dt_petugas=mysqli_fetch_array($qry_get_petugas);

    ?>

    <h3>Tambah Petugas</h3>

    <form action="proses_tambah_petugas.php" method="post">

        <input type="hidden" name="id_petugas" value=

  "<?=$dt_pelanggan['id_petugas']?>">

        Nama Petugas :

  <input type="text" name="nama" value=   "<?=$dt_petugas['nama']?>" class="form-control">

        Username :

  <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control">

        Password :

  <input type="text" name="password" value="<?=$dt_produk['password']?>" class="form-control">

        Level :

        <select name="id_petugas" class="form-control">

<option></option>

<?php 

include "koneksi.php";

$qry_petugas=mysqli_query($conn,"select * from petugas");

while($data_petugas=mysqli_fetch_array($qry_petugas)){

    if($data_petugas['id_petugas']==$dt_siswa['id_petugas']){

        $selek="selected";

    } else {

        $selek="";

    }

echo '<option value="'.$data_petugas['id_petugas'].'" '.$selek.'>'.$data_petugas['nama_petugas'].'</option>';   

}

?>

</select>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>