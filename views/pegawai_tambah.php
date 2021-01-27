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
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_nip" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Induk Pegawai" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="n_tgl" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_golongan"class="form-control" id="inputEmail3" placeholder="Inputkan Golongan" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-3">
                                <input type="text" name="n_jabatan" class="form-control" id="inputEmail3" placeholder="Inputkan Jabatan" required>
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
  $nip=$_POST['n_nip'];
	$nama=$_POST['n_nama'];
	$tgl_lahir=$_POST['n_tgl'];
	$alamat=$_POST['n_alamat'];
	$golongan=$_POST['n_golongan'];
  $jabatan=$_POST['n_jabatan'];
  
    //buat sql
    $sql="INSERT INTO Pegawai VALUES ('$nip','$nama','$tgl_lahir','$alamat','$golongan','$jabatan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Pegawai Error");
    if ($query){
        echo "<script>window.location.assign('?page=Pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
