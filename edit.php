<?php
$koneksi=mysqli_connect("localhost","root","","db_124");
$id=$_GET['id_nurul'];
$query="SELECT * FROM tbl_nurul WHERE id_nurul=$id";
$hasil=mysqli_query($koneksi,$query);
if (!$hasil){
    echo "query salah";
}
while ($baris=mysqli_fetch_array($hasil)){
?>
<h2>Form Edit</h2>
<form action="proses_edit.php" method="POST">
   
    Nama :<input type="text" name="nama_nurul" value="<?php echo $baris['nama_nurul']?>"><br>
    Alamat :<input type="text" name="alamat_nurul" value="<?php echo $baris['alamat_nurul']?>"><br>
    <input type="submit">
</form>
<?php
}
?>