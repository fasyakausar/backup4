<?php
		include "koneksi_login.php";
		session_start();
		
		if( !isset($_SESSION["login"])){
			header("location: menulogin.php");
		}
		//Tombol simpan di klik
		if(isset($_POST['bsimpan']))
		{
				//Data akan disimpan baru
				$simpan = mysqli_query($koneksi, "INSERT INTO tadm (id_adm, email, nama_lengkap, kata_sandi, posisi, unit)
											  VALUES ('$_POST[id_adm]',
												  	 '$_POST[email]', 
											  		 '$_POST[nama_lengkap]', 
											  		 '$_POST[kata_sandi]',
											  		 '$_POST[posisi]',
											  		 '$_POST[unit]')
													   
											 ");
			if($simpan) //Jika simpan sukses
			{
				echo "<script>
						alert('Simpan Data Sukses!');
						document.location='databaseuser.php';
					  </script>";
			}
			else //Jika simpan gagal
			{
				echo "<script>
						alert('Simpan Data GAGAL!');
						document.location='register.php';
					  </script>";
			}
			}
			include "session.php";

		
?>


<!DOCTYPE html>
<html>
<head>
<title>REGISTER!</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css" />
	<!-- Bootstrap CSS -->
   <!-- Required meta tags -->
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="stylewecare.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: rgb(221, 60, 60)">
      <div class="container">
        <a class="navbar-brand" href="page_admin.php">Dashboard Administrator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="page_admin.php">Home</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> WeCare </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="view.php">View</a></li>
                  <li><a class="dropdown-item" href="#">Update</a></li>
                </ul>
              </div>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> User Management </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="register.php">Create User</a></li>
                  <li><a class="dropdown-item" href="editupdatedata.php">Edit User</a></li>
                  <li><a class="dropdown-item" href="databaseuser.php">List User</a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="btn btn-dark" aria-current="page" href="logout.php">LOGOUT</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/Logo We Care (3).png" alt="Logo We Care" width="200" class="rounded-circle" />
      <h1 class="display-4">WeCare User Registration</h1>
      <p class="lead">WeCare More Than You Know.</p>
      <p class="lead">Registrasi User WeCare</p>
    </section>
    <!-- Akhir Jumbotron -->

<!--awal card form -->
	<div class="card mt-5">
  	  <div class="card-header bg-secondary text-white">
    Input Register User
  </div>
  <div class="card-body">
  	<form method="post" action=" ">
	  <div class="form-group font-weight-bold">
  			<label>E-mail</label>
  			<input type="text" name="email" class="form-control" placeholder="Input E-mail User" required>
  		</div>
  		<div class="form-group font-weight-bold">
  			<label>Nama</label>
  			<input type="text" name="nama_lengkap" class="form-control" placeholder="Input Nama User Disini" required>
  		</div>
  		<div class="form-group font-weight-bold">
  			<label>Password</label>
  			<input type="password" name="kata_sandi" class="form-control" placeholder="Input Password User Disini" required>
  		</div>
  		<div class="form-group font-weight-bold">
  			<label>Role</label>
  			<select class="form-control" name="posisi" value="<?=@$vposisi?> required">
  				<option value="Administrator">Administrator</option>
  				<option value="PIC Regional">PIC Regional</option>
				<option value="PIC Witel">PIC Witel</option>
  			</select>
  		</div>
		  <div class="form-group font-weight-bold">
  			<label>Unit </label>
  			<select class="form-control" name="unit" value="<?=@$vposisi?> required">
  				<option value="Unit MSO">Unit MSO</option>
  			</select>
  		</div>
  		
  		<button type="submit" class="btn btn-primary" name="bsimpan">Daftar</button>
  	</form>
  </div>
	</div>
<!-- akhir card form -->
<p class="mt-5 mb-3 text-muted text-center">&copy; PT. Telkom Indonesia, Tbk 2021</p>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>