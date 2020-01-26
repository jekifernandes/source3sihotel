<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pemesan Kamar</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Kamar</th>
                                <th>No Identitas</th>
                                <th>Nama Pengunjung</th>
                                <th>Tanggal Masuk</th>
                                <th>Tipe</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_kamar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id_kamar'] ?></td>
									<td><?= $data['no_identitas'] ?></td>
									<td><?= $data['nama_pelanggan'] ?></td>
									<td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['tipe_kamar'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td><?= $data['deskripsi'] ?></td>
                                    <td>
                                        <a href="?page=pesan&actions=detail&id_kamar=<?= $data['id_kamar'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=pesan&actions=edit&id_kamar=<?= $data['id_kamar'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=pesan&actions=delete&id_kamar=<?= $data['id_kamar'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                         <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=pesan&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Pemeseanan

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

