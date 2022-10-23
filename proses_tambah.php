<?php
$koneksi=mysqli_connect("localhost","root","","db_124");

$nama=$_POST['nama_nurul'];
$alamat=$_POST['alamat_nurul'];

$sql="INSERT INTO tbl_nurul VALUE (null,'$nama','$alamat')";
$hasil=mysqli_query($koneksi, $sql);
if ($hasil){
    header("location:tampil.php");

}

?>
