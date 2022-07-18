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
    <title>ligon anmid</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container pt-5">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center" >L I G O N</h1>
      </div>
      <div class="card-text">
        <form action="ceklogin.php" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <div class="pt-3">
            <button type="submit" class="btn btn-primary" name="btnlogin" >Login</button>
            <a href="regis.php" type="submit" class="btn btn-primary">Register</a>
          </div>  
        </form>
      </div>
    </div>
  </div>
</body>
</html>