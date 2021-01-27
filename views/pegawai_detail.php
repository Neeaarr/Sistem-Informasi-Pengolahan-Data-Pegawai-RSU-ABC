<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail pegawai-->
                    <?php
                    $sql = "SELECT *FROM pegawai WHERE nip ='" . $_GET ['nip'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">NIP</td> <td><?= $data['nip'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggan Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>golongan</td> <td><?= $data['golongan'] ?></td>
                        </tr>
                        <tr>
                            <td>jabatan</td> <td><?= $data['jabatan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pegawai&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data pegawai </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

