<?php 
security_login();

if(!isset($_GET['action'])){
	$data_menu = mysqli_query($koneksidb,"select * from operator");
	//untuk contoh generate kode		
}
else if(isset($_GET['action']) && $_GET['action'] == "add"){
	$nmmenu = "";
	$proses = "insert";
	$idmenu = 0 ;
}
else if(isset($_GET['action']) && $_GET['action'] == "edit"){
    $ids=$_GET['id'];
	$qry = mysqli_query($koneksidb,"select * from operator where idop='$ids'");
	$dt = mysqli_fetch_array($qry);
	$upop = $dt['idop'];
	$upnama = $dt['namal'];
	$upalamat = $dt['alamat'];
	$upnotlp = $dt['notlp'];
	$proses = "update";
}
else if(isset($_GET['action']) && $_GET['action'] == "save"){
	$idop = $_POST['idop'];
	$namal = $_POST['namal'];
	$alamat = $_POST['alamat'];
	$notlp = $_POST['notlp'];
	$proses = $_POST['proses'];
	if($proses == "insert"){
		mysqli_query($koneksidb,"insert into operator(namaop,alamatop,notlpop)values('$idop','$namal','$notlp')")or die(mysqli_error($koneksidb));
		echo '<meta http-equiv="refresh" content="0; url='.ADMIN_URL.'?modul=mod_op">';
	}
	else if($proses == "update"){
		mysqli_query($koneksidb,"update operator SET namaop='$namal', alamatop='$alamat',notlpop='$notlp' WHERE idop = '$idop' ")or die(mysqli_error($koneksidb));
		echo '<meta http-equiv="refresh" content="0; url='.ADMIN_URL.'?modul=mod_op">';
	}
	
}else if(isset($_GET['action']) && $_GET['action'] == "delete"){
    $id=$_GET['id'];
    mysqli_query($koneksidb,"DELETE FROM operator where idop='$id'");
    echo '<meta http-equiv="refresh" content="0; url='.ADMIN_URL.'?modul=mod_op">';

}
?>