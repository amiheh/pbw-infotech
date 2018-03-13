<?php
$koneksi = new mysqli("localhost", "id4889425_root", "password", "id4889425_foto");
if(mysqli_connect_errno()) {
	echo "Gagal melakukan koneksi ke MySQL: " . $koneksi->connect_error;
}
$sql = "select * FROM simpan ORDER BY id DESC LIMIT 4";
$tampil = mysqli_query($koneksi,$sql);
while ($data = mysqli_fetch_array($tampil)){
	// Tampilkan Gambar
	echo "<div class='col-xs-6 col-md-6 foto-galeri' style='background-image: url(gambar/".$data['gambar'].")'><div class='captions'>".$data['keterangan']."<br><br><br><a href='/edit.php?id=".$data['id']."'>edit</a> <a href='/delete.php?id=".$data['id']."'>delete</a></div></div>";
}
  	
  	mysqli_close($koneksi); 
  	?>