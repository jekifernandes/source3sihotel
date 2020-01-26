<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pemesan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="id_kamar" class="col-sm-3 control-label">Nomor Kamar</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_kamar" class="form-control" autocomplete="" placeholder="Inputkan Nomor kamar " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_identitas" class="col-sm-3 control-label">No Identitas</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_identitas" class="form-control"  placeholder="Inputkan Nomor identitas" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_pelanggan" class="col-sm-3 control-label">Nama Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pelanggan" class="form-control"  placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" class="form-control"  placeholder="Inputkan tanggal" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tipe_kamar" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe_kamar" class="form-control"  placeholder="Inputkan Tipe" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga"class="form-control"  placeholder="Inputkan Harga" required>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="deskripsi" class="form-control"  placeholder="Inputkan Deskripsi" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pemesan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kamar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kamar
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id_kamar=$_POST['id_kamar'];
    $no_identitas=$_POST['no_identitas'];
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $tanggal=$_POST['tanggal'];
    $tipe_kamar=$_POST['tipe_kamar'];
    $harga=$_POST['harga'];
    $deskripsi=$_POST['deskripsi'];

    $result = mysqli_query($koneksi, "SELECT id_kamar FROM tbl_kamar WHERE id_kamar = '$id_kamar'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Kamar ini sudah dipesan!!!');
              </script>";

              return false;

 }

    //buat sql
    $sql="INSERT INTO tbl_kamar VALUES ('$id_kamar','$no_identitas','$nama_pelanggan','$tanggal','$tipe_kamar','$harga','$deskripsi')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Kamar Error");
    if ($query){
        echo "<script>window.location.assign('?page=pesan&actions=tampil');</script>";
    }
    }

?>
