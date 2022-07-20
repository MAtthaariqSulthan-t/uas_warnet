<?php
        require_once("config/koneksidb.php");
        require_once("config/config.php");

if(isset($_POST['regis'])){
        $user=$_POST['username'];
        $pass=md5($_POST['password']);
        $nama=$_POST['nama'];
        $isactive=$_POST['isactive'];
        $quser = mysqli_query($koneksidb, "SELECT u.username FROM mst_userlogin u WHERE u.username LIKE '".$_POST['username']."' ");
        $data=mysqli_fetch_array($quser); 
        if($user == $data['username']){
                header("Location: register.php");
        } else{
                $qinsert=mysqli_query($koneksidb, "INSERT INTO mst_userlogin (username, nama, password, is_active)
                VALUES ('$user', '$nama', '$pass', '$isactive')");
                header("Location: index.php");
        }


}
