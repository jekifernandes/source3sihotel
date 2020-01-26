<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_kamar WHERE id_kamar ='" . $_GET ['id_kamar'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pemesanan Hotel</h2>
                        
                        <hr>
                        <h3>DATA ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nomor Kamar</td> <td><?= $data['id_kamar'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">No Ientitas</td> <td><?= $data['no_identitas'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td> <td><?= $data['nama_pelanggan'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                                </tr>
								<tr>
                                    <td>Tipe</td> <td><?= $data['tipe_kamar'] ?></td>
                                </tr>
								<tr>
                                    <td>Harga</td> <td><?= $data['harga'] ?></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td> <td><?= $data['deskripsi'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>