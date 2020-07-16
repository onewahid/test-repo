<?php

function input_data_pemesan($nama, $email, $hp, $pesan){
	global $link;
	
	$nama  = mysqli_real_escape_string($link, $nama);
	$email = mysqli_real_escape_string($link, $email);
	$hp    = mysqli_real_escape_string($link, $hp);
	$pesan = mysqli_real_escape_string($link, $pesan);
	
	$query = "INSERT INTO pemesan(nama_pemesan, email_pemesan, hp_pemesan, pesan_pemesan) VALUES('$nama', '$email', '$hp', '$pesan')";
	
	if (mysqli_query($link, $query)){
		return true;
	}else{
		return false;
	}
}

?>