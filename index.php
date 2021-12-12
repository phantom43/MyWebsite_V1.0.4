<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">"
<head> 
	<nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
	<div name="nav">
	<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Xzone.php" onclick="confirm('halaman ini mengandung konten 18+\nLANJUTKAN?.');">HENTAI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://github.com/phantom43">GITHUB</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://facebook.com/TGaming24">FACEBOOK</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">BAKAWEB</a>
  </li>
</ul>
</nav>
</div>
</div>
<br>
<br>
<br>
</head>
<?php 
//koneksi
include 'corndog.php';
//variabel database
$sql = "SELECT * FROM animeku";
$query = mysqli_query($dog,$sql);
$animemu = mysqli_fetch_array($query);
//progam
//var_dump($animemu); 
while ($animemu = mysqli_fetch_array($query)) {
	?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>


<style type="text/css">
	.bg {
		background-color: grey;
		background-size: 1500px;
	}
</style>
<html>
<body>
	<center>
	<div class="bg">
		<br>
	<div class="card" style="width: 18rem;">
  <img src="<?php echo $animemu['gambar'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $animemu['judul'];?></h5>
    <p class="card-text"><?php echo $animemu['deskripsi'];?></p>
    <a href="https://<?php echo $animemu['link']?>" class="btn btn-primary">DOWNLOAD</a>
  </div>
</div>
<br>
<?php } ?>
</br>
</center>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</div>
</html>



