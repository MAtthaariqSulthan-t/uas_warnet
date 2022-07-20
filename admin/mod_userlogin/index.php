<?php
include_once("loginctrl.php");
if (!isset($_GET['action'])) {
?>
	<a href="?modul=mod_userlogin&action=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
	<table class="table table-bordered">
		<tr>
			<th>id  user</th>
			<th>username</th>
			<th>nama</th>
			<th>password</th>
			<th>is active</th>
			<th>Action</th>
		</tr>
		<?php
        $listuser=mysqli_query($koneksidb,"SELECT  * from mst_userlogin");
		while ($list = mysqli_fetch_array($listuser)) {
		?>
        <tr>
            <td><?=$list['iduser']; ?></td>
            <td><?=$list['username']; ?></td>
            <td><?=$list['nama']; ?></td>
            <td><?=$list['password']; ?></td>
            <td><?=$list['is_active']; ?></td>
            <td> 
                <a href="?modul=mod_userlogin&action=edit&id=<?=$list['iduser']; ?>" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>edit</a>
                <a href="?modul=mod_userlogin&action=delete&id=<?=$list['iduser']; ?>" class="btn btn-danger">
                        <i class="bi bi-trash"></i>delete</a>
            </td>
        </tr>
        <?php } ?>
	</table>
	<?php } else if (isset($_GET['action']) && ($_GET['action'] == "add" || $_GET['action'] == "edit")) {
?>
	<?php
	if ($proses == "insert") {
	?>
		<form action="?modul=mod_userlogin&action=save" id="formmenu" method="POST">
			<div class="row pt-3">
				<div class="col-md-5">
					<input type="hidden" name="proses" value="<?= $proses; ?>">
				</div>
			</div>
			<div class="row pt-3">
				<label class="col-md-2">Username</label>
				<div class="col-md-5">
					<input type="text" name="username" id="nmmenu" class="form-control">
				</div>
			</div>
			<div class="row pt-3">
				<label class="col-md-2">Nama</label>
				<div class="col-md-5">
					<input type="text" name="nama" id="link" class="form-control">
				</div>
			</div>
            <div class="row pt-3">
				<label class="col-md-2">Password</label>
				<div class="col-md-5">
					<input type="password" name="password" id="link" class="form-control">
				</div>
			</div>
            <div class="row">
			<label class="col-md-2">Is Active</label>
			<div class="col-md-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isactive" id="isactive" value="1">
                    <label class="form-check-label">
                        Aktif
                    </label>
                    </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isactive" id="isactive" value="0" >
                    <label class="form-check-label" >
                        Not Active
                    </label>
                    </div>
                </div>
		</div>
			<div class="row pt-3">
				<label class="col-md-2"></label>
				<div class="col-md-5">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="home.php?modul=mod_userlogin"><button type="button" class="btn btn-warning">Kembali</button></a>
				</div>
			</div>
		</form>
	<?php
	} else {
	?>
		<form action="?modul=mod_userlogin&action=save" method="POST">
			<?php
			$qry = mysqli_query($koneksidb, "select * from mst_userlogin where idmenu='$ids' LIMIT 0,1");
			?>
			<div class="row pt-3">
				<label class="col-md-2">Username</label>
				<div class="col-md-5">
					<input type="hidden" name="proses" value="<?= $proses; ?>">
					<input type="hidden" name="idmenu" value="<?= $dt['iduser']; ?>">
					<input type="text" class="form-control" name="username" value="<?= $dt['username']; ?>">
				</div>
			</div>
			<div class="row pt-3">
				<label class="col-md-2">Nama</label>
				<div class="col-md-5">
					<input type="text" class="form-control" name="nama" value="<?= $dt['nama']; ?>">
				</div>
			</div>
            <div class="row pt-3">
				<label class="col-md-2">Password</label>
				<div class="col-md-5">
					<input type="password" class="form-control" name="password" value="<?= $dt['password']; ?>">
				</div>
			</div>
			<div class="row pt-3">
				<label class="col-md-2"></label>
				<div class="col-md-5">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="home.php?modul=mod_userlogin"><button type="button" class="btn btn-warning">Kembali</button></a>
				</div>
			</div>
		</form>
	<?php
	}
	?>
<?php
}
?>