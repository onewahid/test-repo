<!-- <!DOCTYPE html> -->

<?php
require_once "core/init.php";

$produk = tampil_produk();

$berhasil = "";

if ( isset($_POST['Submit']) ){
	
	$nama  = $_POST['Nama'];
	$email = $_POST['Email'];
	$hp    = $_POST['Handphone'];
	$pesan = $_POST['Pesan'];
	
	if( trim($nama) && trim($email) && trim($hp) && trim($pesan) ){
		input_data_pemesan($nama, $email, $hp, $pesan);
		$berhasil = "Terima kasih sudah memesan";
	}else{
		$berhasil = "Gagal memesan";
	}
	
}

?>

<html>
<head>
	<title>Shamsia</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body class="semua">

<header class="katalog">
	<div class="nav-bar">
		<div class="logo"><img src="img/Shamsia-Logo-Putih.png"></div>
		<ul class="list-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="katalog.php">Catalogue</a></li>
			<li><a href="#">Articles</a></li>
			<li><a href="index.php">About</a></li>
			<li><a href="index.php">Contact</a></li>
		</ul>
	</div>
</header>


<?php while ($rows = mysqli_fetch_assoc($produk)):?>
<div class="wrap-katalog-produk">
	<a href=""><div class="katalog-produk">
		<div class="perproduk">
			<img src="img/produk/<?= $rows['gambar_produk']; ?>">
			<p>DETAIL</p>
		</div>
		<p><?= $rows['nama_produk']; ?> </p>
		<p>Rp <?= number_format($rows['harga_produk'], 0, ",", "."); ?></p>
	</div>
	</a>
</div>
<?php endwhile; ?>

<div class="clear"></div>

<div class="wrapper-rfq">
	<div class="RFQ">
		<h2 id="pemesanan">PEMESANAN</h2>
		<form action="#pemesanan" method="post" style="position: relative;">
			<input type="text" placeholder="Nama" name="Nama" required>
			<input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" name="Email" required>
			<input type="tel" pattern="[0-9]+" title="Only Number" placeholder="Handphone" maxlength="13" minlength="8" name="Handphone" required>
			<textarea type="text" placeholder="Pesan" name="Pesan" required></textarea>
			<button name="Submit">Kirim</button>
			<div class="feedback" style="color: #927218; bottom: -25px; position: absolute; width: 100%; text-align: center;"><?php echo $berhasil ?></div>
		</form>
	</div>
</div>

<footer>
	
	<div class="copyright katalog-footer">
		<p>&copy; Shamsia 2018</p>
	</div>
	
</footer>

<script src="jquery-3.3.1.js"></script>
<script src="jquery.js"></script>
</body>
</html>