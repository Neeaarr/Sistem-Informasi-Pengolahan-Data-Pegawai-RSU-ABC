<?php
//membuat query untuk hapus data
$sql="DELETE FROM gaji WHERE nip ='".$_GET['nip']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=gaji&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=gaji&actions=tampil');</scripr>";
}

