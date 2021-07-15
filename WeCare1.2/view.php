<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="stylewecare.css" />
    <link rel="stylesheet" href="styleregion.css" />
    <title>Welcome To We Care!</title>
   <title>Import Excel</title>
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
                  <li><a class="dropdown-item" href="databaseuser.php">Data User</a></li>
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
      <h1 class="display-7">We Care Performance View</h1>
      <!--awal card tabel -->
    <style type="text/css">
body{
    font-family: sans-serif;
    text-align: center
}
</style>

<?php
    if(isset($_GET['berhasil'])){
        //Tampilkan Jumlah Data Yang Berhasil Di Import 
    }
?>


<div class="card mt-5">
  	<div class="card-header bg-success text-white" width="200">
    Data Performance
	<a class="btn btn-warning" aria-current="page" href="upload.php">Upload</a>
  </div>
  <div class="card-body">
  	<table class="table table-bordered table-black-50">
  		<tr>
  			<th>No.</th>
  			<th>performance_indicator</th>
  			<th>unit</th>
  			<th>mtd_tgt </th>
        <th>mtd_real</th>
  			<th>mtd_gap</th>
  			<th>mtd_ach</th>
  			<th>ytd_tgt</th>
        <th>ytd_real</th>
  			<th>ytd_gap</th>
  			<th>ytd_ach</th>
  			<th>scale</th>
  			<th>last_week_scale</th>
  			<th>last_week_mtd</th>
  			<th>last_week_ytd</th>
  		</tr>
</div>
<?php
    include "koneksi.php";
    $no=1;
    $tampil = mysqli_query ($koneksi, "SELECT * from tpegawai");
    while($data = mysqli_fetch_array($tampil)) :
?>
<tr>
    <td><?=$no++?></td>
    <td><?=$data['performance_indicator']?></td>
    <td><?=$data['unit']?></td>
    <td><?=$data['mtd_tgt']?></td>
    <td><?=$data['mtd_real']?></td>
    <td><?=$data['mtd_gap']?></td>
    <td><?=$data['mtd_ach']?></td>
    <td><?=$data['ytd_tgt']?></td>
    <td><?=$data['ytd_real']?></td>
    <td><?=$data['ytd_gap']?></td>
    <td><?=$data['ytd_ach']?></td>
    <td><?=$data['scale']?></td>
    <td><?=$data['last_week_scale']?></td>
    <td><?=$data['last_week_mtd']?></td>
    <td><?=$data['last_week_ytd']?></td>
</tr>
<?php endwhile; ?>

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>