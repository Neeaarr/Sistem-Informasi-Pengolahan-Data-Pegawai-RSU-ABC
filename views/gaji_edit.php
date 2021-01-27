<?php
$nip=$_GET['nip'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM gaji WHERE nip ='$nip'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Gaji Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_golongan" value="<?=$data['golongan']?>"  class="form-control" id="inputEmail3" placeholder="Inputkan Golongan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Gaji</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_gaji" value="<?=$data['gaji']?>"  class="form-control" id="inputEmail3" placeholder="Inputkan Gaji" required>
                            </div>
                        </div>


                        <!--Status
                        -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Edit Data Gaji Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=gaji&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Gaji Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $golongan=$_POST['n_golongan'];
    $gaji=$_POST['n_gaji'];
    //buat sql
    $sql="UPDATE gaji SET golongan='$golongan',gaji='$gaji' WHERE nip ='$nip'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=gaji&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



