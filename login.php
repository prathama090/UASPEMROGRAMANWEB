<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
		<ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pasien.php">Pasien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="dokter.php">Dokter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kamar.php">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload.php">File</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Admin</a>
            </li>
		</ul>
		
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="caard">
						<form action="login_proses.php" method="post" class="box">
							<h1>Login</h1>
							<p class="text-muted"> Please enter your login and password!</p> 
							<label for="username"></label>
							<input type="text" placeholder="Username" name="username" id="username" required> 
							<label for="password"></label>
							<input type="password" placeholder="Password" name="password" id="password" required> 
							<input type="submit" name="" value="Login" href="admin.php">
						</form>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>