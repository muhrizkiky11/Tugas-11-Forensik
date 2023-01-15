<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Register</title>
  	<link rel="icon" href="http://siakad.umb.ac.id/umb/img/login.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Halaman Register</h2>
  <form action="action_register.php" method="post">
  	 <div class="mb-3 mt-3">
      <label for="nama">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Your NPM" name="nama" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="npm">Nomor Pokok Mahasiswa:</label>
      <input type="text" class="form-control" id="npm" placeholder="Enter Your NPM" name="npm" required>
    </div>
    <div class="mb-3">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
    </div>
    <button type="submit" class="btn btn-primary" name="simpan">Registrasi</button> || <button  class="btn btn-dark" onclick="return login();">LOGIN</button>
  </form>
</div>
</body>
<script type="text/javascript">
	function login() {
	window.location.href='index.php';
	}
	
</script>
</html>
