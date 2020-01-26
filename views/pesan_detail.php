<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM tbl_kamar WHERE id_kamar ='" . $_GET ['id_kamar'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No. Identitas</td> <td><?= $data['no_identitas'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pelanggan</td> <td><?= $data['nama_pelanggan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
						<tr>
                            <td>Tipe Kamar</td> <td><?= $data['tipe_kamar'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td> <td><?= $data['deskripsi'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pesan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pemesanan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

