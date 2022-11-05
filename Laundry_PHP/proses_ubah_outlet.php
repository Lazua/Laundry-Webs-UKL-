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
        echo "<script>alert('Telp tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update otlet set nama='".$nama_outlet."',alamat='".$alamat."',tlp='".$telp."',kota='".$kota."' where id = '".$id_outlet."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id=".$id_outlet."';</script>";
            }
        
        
    } 
}
?>