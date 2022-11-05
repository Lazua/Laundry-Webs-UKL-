<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $telp=$_POST['tlp_member'];
    $kota=$_POST['kota'];
  
    
    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($telp)){
        echo "<script>alert('telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
    
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp, kota) value ('".$nama_member."','".$alamat."','".$gender."','".$telp."','".$kota."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}
?>

