<?php
$nip=$_GET['nip'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip ='$nip'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="n_tgl" value="<?=$data['tgl_lahir']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_golongan" value="<?=$data['golongan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Golongan" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-3">
                                <input type="text" name="n_jabatan" value="<?=$data['jabatan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jabatan" required>
                            </div>
                        </div>


                        <!--Status
                        -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=Pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama=$_POST['n_nama'];
    $tgl_lahir=$_POST['n_tgl'];
    $alamat=$_POST['n_alamat'];
    $golongan=$_POST['n_golongan'];
  $jabatan=$_POST['n_jabatan'];
    //buat sql
    $sql="UPDATE pegawai SET nama='$nama',tgl_lahir='$tgl_lahir',alamat='$alamat',golongan='$golongan',
	jabatan='$jabatan' WHERE nip ='$nip'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



