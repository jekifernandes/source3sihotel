<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data User</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="id_kamar" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" class="form-control" autocomplete="" placeholder="Username " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_identitas" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="passwd" class="form-control"  placeholder="Inputkan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_pelanggan" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control"  placeholder="Inputkan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control"  placeholder="Inputkan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tipe_kamar" class="col-sm-3 control-label">Level</label>
                            <div class="col-sm-9">
                                <input type="text" name="level" class="form-control"  placeholder="Inputkan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket"class="form-control"  placeholder="Inputkan" required>
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
                    <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data User
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $username=$_POST['username'];
    $passwd=md5($_POST['passwd']);
    $email=$_POST['email'];
    $nama=$_POST['nama'];
    $level=$_POST['level'];
    $ket=$_POST['ket'];

    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('User ini sudah ada!!!');
              </script>";

              return false;

 }

    //buat sql
    $sql="INSERT INTO user VALUES ('$username','$passwd','$email','$nama','$level','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan User Error");
    if ($query){
        echo "<script>window.location.assign('?page=user&actions=tampil');</script>";
    }
    }

?>
