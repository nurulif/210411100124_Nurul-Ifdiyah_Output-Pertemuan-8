<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nama : NURUL IFDIYAH<br>
    NIM  : 210411100124<br>
    Kelas: PAW - C
    <HR>
    <?php
$koneksi=mysqli_connect("localhost","root","","db_124");
$sql="SELECT * FROM tbl_nurul";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "koneksi tidak berhasil";

}
?>
<a href="formtambah.php">Tambah</a>

<table border="1">
    <tr>
        <td>id_nurul</td>
        <td>Nama_nurul</td>
        <td>Alamat_nurul</td>
        <td>Action</td>
    </tr>
<?php
while ($row=mysqli_fetch_assoc($hasil)){
    ?>
    <tr>
        <td><?php echo $row['id_nurul']?></td>
        <td><?php echo $row['nama_nurul']?></td>
        <td><?php echo $row['alamat_nurul']?></td>
        <td>
            <a href="delete.php? id_nurul=<?php echo $row['id_nurul']?>">Delete</a>
            <a href="edit.php? id_nurul=<?php echo $row['id_nurul']?>">Edit</a>
        </td>
</tr>
<?php
}
?>
</table>
</body>
</html>