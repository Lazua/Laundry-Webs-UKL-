<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil Outlet</h3>
    <a href="tambah_outlet.php" class="btn btn-success">Tambah Outlet</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
    <th>NAMA OUTLET</th>
    <th>ALAMAT</th>
    <th>TELP</th>
    <th>KOTA</th>
    <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_outlet=mysqli_query($conn,"select * from otlet");
            $no=0;
            while($data_outlet=mysqli_fetch_array($qry_outlet)){
            $no++;?>
        <tr>              
            <td><?=$no?></td>
            <td><?=$data_outlet['nama']?></td> 
            <td><?=$data_outlet['alamat']?></td>
            <td><?=$data_outlet['tlp']?></td> 
            <td><?=$data_outlet['kota']?></td>
            <td><a href="ubah_outlet.php?id=<?=$data_outlet['id']?>" class="btn btn-success">Ubah</a> | <a href="hapus_outlet.php?id=<?=$data_outlet['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<?php
include "footer.php"
?>