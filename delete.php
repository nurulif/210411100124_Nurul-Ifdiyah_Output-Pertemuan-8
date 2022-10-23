<?php
$koneksi=mysqli_connect("localhost","root","","db_124");
$id=$_GET['id_nurul'];
$query="DELETE FROM tbl_nurul WHERE id_nurul=$id";
$hasil=mysqli_query($koneksi,$query);
if ($hasil){
    header("location:tampil.php");
}
?>