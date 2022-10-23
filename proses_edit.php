<?php
include='koneksi.php'
$koneksi=mysqli_connect("localhost","root","","db_124");
$id=$_POST['id_nurul'];
$nama=$_POST['nama_nurul'];
$alamat-$_POST['alamat_nurul'];

$sql="UPDATE tbl_nurul SET nama_nurul='$nama',alamat_natasya='$alamat' WHERE id_nurul=$id";
$hasil=mysqli_query($koneksi, $sql);

if($hasil){
    header("location : tampil.php");
}

?>