<?php
include_once("opCtrl.php");
if (!isset($_GET['action'])) {
?>
	<a href="?modul=mod_op&action=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No.tlp</th>
			<th>Action</th>
		</tr>
		<?php
        $listuser=mysqli_query($koneksidb,"SELECT  * from operator");
		while ($list = mysqli_fetch_array($listuser)) {
		?>
        <tr>
            <td><?=$list['idop']; ?></td>
            <td><?=$list['namaop']; ?></td>
            <td><?=$list['alamatop']; ?></td>
            <td><?=$list['notlpop']; ?></td>
            <td> 
                <a href="?modul=mod_op&action=edit&id=<?=$list['iduser']; ?>" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>edit</a>
                <a href="?modul=mod_op&action=delete&id=<?=$list['iduser']; ?>" class="btn btn-danger">
                        <i class="bi bi-trash"></i>delete</a>
            </td>
        </tr>
        <?php } ?>
	</table>
	<?php } else if (isset($_GET['action']) && ($_GET['action'] == "add" || $_GET['action'] == "edit")) {
        if($proses=="insert"){
    ?>
	<form action="?modul=mod_op&action=save" id="formuser" method="POST">
        <div class="row">
			<label class="col-md-3">Nama Lengkap</label>
			<div class="col-md-5">
            <input type="hidden" name="proses" value="<?= $proses; ?>">
            <input type="hidden" name="idop" value="<?= $upidop; ?>">
				<input type="text" name="namal" id="user" class="form-control" >
			</div>
		</div>
		<div class="row">
			<label class="col-md-3">Alamat</label>
			<div class="col-md-5">
				<input type="text" name="alamat" id="nama" class="form-control" >
			</div>
		</div>
		<div class="row">
			<label class="col-md-3">No.tlp</label>
			<div class="col-md-5">
				<input type="text" name="notlp" id="pass" class="form-control" >
			</div>
		</div>
        <div class="row pt-3">
                <label class="col-md-3"></label>
                <div class="col-md-5">
                    <button type="submit " name="btnsimpan" id="btnsimpan" class="btn btn-primary">Simpan</button>
                    <a href="home.php?modul=mod_op"><button type="button" class="btn btn-warning">Kembali</button></a>
                </div>
            </div>
	</form>
<?php }else{ ?>
    <form action="?modul=mod_op&action=save" id="formuser" method="POST">
        <?php if($proses=="update"){ ?>
        <div class="row">
			<label class="col-md-3">Nama Lengkap</label>
			<div class="col-md-5">
            <input type="hidden" name="proses" value="<?= $proses; ?>">
            <input type="hidden" name="idop" value="<?= $upidop; ?>">
				<input type="text" name="namal" id="user" class="form-control" value="<?= $upop?>" readonly>
			</div>
		</div>
        <?php } ?>
		<div class="row">
			<label class="col-md-3">alamat</label>
			<div class="col-md-5">
				<input type="text" name="alamat" id="nama" class="form-control" value="<?= $upalamat?>">
			</div>
		</div>
		<div class="row">
			<label class="col-md-3">No.tlp</label>
			<div class="col-md-5">
				<input type="text" name="notlp" id="pass" class="form-control" value="<?= $upnotlp?>">
			</div>
		</div>
        <div class="row pt-3">
                <label class="col-md-3"></label>
                <div class="col-md-5">
                    <<button type="submit" name="btnsimpan" id="btnsimpan" class="btn btn-primary">Simpan</button>
                    <a href="home.php?modul=mod_op"><button type="button" class="btn btn-warning">Kembali</button></a>
                </div>
            </div>
	</form>
<?php } ?>
<!--modal -->
<div class="modal fade" id="btnkonfirm" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                apakah anda yakin ingin menyimpan?
            </div>
            <div class="modal-footer">
                <button type="button" name="btnbatal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="btnsimpan" id="btnsimpan" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
        </div>
<?php } ?>
