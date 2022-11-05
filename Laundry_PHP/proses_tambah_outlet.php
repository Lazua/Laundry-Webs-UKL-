<?php
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['tlp_outlet'];
    $kota=$_POST['kota'];
  
    
    if(empty($nama_outlet)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";

    } elseif(empty($telp)){
        echo "<script>alert('telepon tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into otlet (nama, alamat, tlp, kota) value ('".$nama_outlet."','".$alamat."','".$telp."','".$kota."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
}
?>
