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
        echo "<script>alert('Telp tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update member set nama='".$nama_member."',alamat='".$alamat."',jenis_kelamin='".$gender."',tlp='".$telp."',kota='".$kota."' where id = '".$id_member."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id=".$id_member."';</script>";
            }
        
        
    } 
}
?>
