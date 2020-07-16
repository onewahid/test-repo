<?php

function tampil_produk(){
	global $link;
	$query = "SELECT * FROM produk";
	if ($result = mysqli_query($link, $query) or die ('Gagal menampilkan data')){
	return $result;
	}
}

?>