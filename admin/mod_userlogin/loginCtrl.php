<?php 
security_login();

if(!isset($_GET['action'])){
	$data_menu = mysqli_query($koneksidb,"select * from mst_userlogin");		
}
else if(isset($_GET['action']) && $_GET['action'] == "add"){
	$nmmenu = "";
	$proses = "insert";
	$idmenu = 0 ;
}
else if(isset($_GET['action']) && $_GET['action'] == "edit"){
    $ids=$_GET['id'];
	$qry = mysqli_query($koneksidb,"select * from mst_userlogin where iduser='$ids'");
	$dt = mysqli_fetch_array($qry);
	$upiduser = $dt['iduser'];
	$upuser = $dt['username'];
	$uppass = $dt['password'];
	$upnama = $dt['nama'];
    $upisactive = $dt['is_active'];
	$proses = "update";
}
else if(isset($_GET['action']) && $_GET['action'] == "save"){
	$iduser = $_POST['iduser'];
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$pass = md5($_POST['password']);
	$isactive = $_POST['isactive'];
	$proses = $_POST['proses'];
	if($proses == "insert"){
		mysqli_query($koneksidb,"insert into mst_userlogin(username,nama,password,is_active)values('$username','$nama','$pass','$isactive')")or die(mysqli_error($koneksidb));
		echo '<meta http-equiv="refresh" content="0; url='.ADMIN_URL.'?modul=mod_userlogin">';
	}
	else if($proses == "update"){
		mysqli_query($koneksidb,"update mst_userlogin SET username='$upuser', nama='$upnama',password='$uppass',is_active='$upisactive' WHERE iduser = '$iduser' ")or die(mysqli_error($koneksidb));
		echo '<meta http-equiv="refresh" content="0; url='.ADMIN_URL.'?modul=mod_userlogin">';
	}
	
}else if(isset($_GET['action']) && $_GET['action'] == "delete"){
    $id=$_GET['id'];
    mysqli_query($koneksidb,"DELETE FROM mst_userlogin where iduser='$id'");
    echo '<meta http-equiv="refresh" content="0; url='.ADMIN_URL.'?modul=mod_userlogin">';

}
?>