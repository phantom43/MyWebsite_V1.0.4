<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head> 
	<nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">

	<div name="nav">
	<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="corndog.php" onclick="confirm('halaman ini mengandung konten 18+\nLANJUTKAN?.');">HENTAI</a>
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
</div>
</div>
</nav>
</head>
<br>
<br>
<?php 

//koneksi
include 'corndog.php';
//sqlnya
$hent = 'SELECT * FROM HENTAI';
$query = mysqli_query($dog, $hent);
$hentainibos = mysqli_fetch_array($query);
//end 
//perulangannya
while ($animemu = mysqli_fetch_array($query)) {
?>
<style type="text/css">
	.body {
		background-color: grey;
		background-size: 1500px;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="body">
		<center>
		<br><table><tr>
	<td><?="<img src='imej/".$animemu['gambar']."'style='width:550px; height:450x;'> "?></td></tr></table>
</center>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
</div>
<?php } ?>
