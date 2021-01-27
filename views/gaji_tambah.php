<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Gaji Pegawai</h3>
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
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_golongan" class="form-control" id="inputEmail3" placeholder="Inputkan Golongan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Gaji</label>
                            <div class="col-sm-9">
                                <input type="text" name="n_gaji" class="form-control" id="inputEmail3" placeholder="Inputkan Gaji" required>
                            </div>
                        </div>
                        <!--Status
                        -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Gaji Pegawai</button>
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
  $nip=$_POST['n_nip'];
	$golongan=$_POST['n_golongan'];
	$gaji=$_POST['n_gaji'];
  
    //buat sql
    $sql="INSERT INTO gaji VALUES ('$nip','$golongan','$gaji')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan gaji Error");
    if ($query){
        echo "<script>window.location.assign('?page=gaji&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
