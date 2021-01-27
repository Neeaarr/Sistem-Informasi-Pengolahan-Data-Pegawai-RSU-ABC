<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Gaji Pegawai</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT pegawai.nip, pegawai.nama, pegawai.tgl_lahir, pegawai.golongan, pegawai.jabatan, gaji.nip, gaji.gaji from pegawai, gaji WHERE pegawai.nip=gaji.nip";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   
    <body onload="print()">
        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pegawai RSU ABC </h2>
                        <h4>Jalan Budi Keadilan No. 7, Mekar Baru, Kisaran<br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Gaji Pegawai</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>NIP</td> <td><?= $data['nip'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Pegawai</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td> <td><strong><?= $data['tgl_lahir'] ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Golongan</td> <td><?= $data['golongan'] ?></td>
                                </tr>
								<tr>
                                    <td>Jabatan</td> <td><?= $data['jabatan'] ?></td>
                                </tr>
								<tr>
                                    <td>Gaji</td> <td><?= $data['gaji'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Direktur RSU ABC<strong></u><br>
                                        NIP.17220272557
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>