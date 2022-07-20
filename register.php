<?php
  	require_once("config/koneksidb.php");
    require_once("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girester anmid</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
  <div class="container pt-5">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center" >G I RESTER</h1>
      </div>
      <div class="card-text">
        <form action="regisCtrl.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ussername</label>
            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password2" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input" name="isactive" id="exampleCheck1" value="1">
             <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
            <button type="submit" class="btn btn-primary" name="regis">Register</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
