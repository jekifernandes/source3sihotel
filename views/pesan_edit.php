<?php
$id_kamar=$_GET['id_kamar'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kamar WHERE id_kamar ='$id_kamar'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        
						
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">No Kamar</label>
                            <div class="col-sm-9">
                                <input type="text" name="noBoks" value="<?=$data['id_kamar']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kamar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">No Identitas</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_identitas" value="<?=$data['no_identitas']?>"class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Nama Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pelanggan" value="<?=$data['nama_pelanggan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kamar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggal" value="<?=$data['tanggal']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kamar">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tipe" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe_kamar" value="<?=$data['tipe_kamar']?>"class="form-control" id="inputEmail3" placeholder="Tipe">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="Harga" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->        

                        <div class="form-group">
                            <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="deskripsi" value="<?=$data['deskripsi']?>" class="form-control" id="inputPassword3" placeholder="Deskripsi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pemesanan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pesan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pemesanan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form$id_kamar=$_POST['id_kamar'];
    $no_identitas = $_POST['no_identitas'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $tanggal = $_POST['tanggal'];
    $tipe_kamar=$_POST['tipe_kamar'];
	$harga=$_POST['harga'];
    $deskripsi=$_POST['deskripsi'];
	
    //buat sql
    $sql="UPDATE tbl_kamar SET no_identitas='$no_identitas',nama_pelanggan='$nama_pelanggan',tanggal='$tanggal',tipe_kamar='$tipe_kamar',harga='$harga',deskripsi='$deskripsi' WHERE id_kamar ='$id_kamar'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Kamar Error");
    if ($query){
        echo "<script>window.location.assign('?page=pesan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



