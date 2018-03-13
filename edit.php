<form enctype="multipart/form-data" method="post">
    
<?php
$url = $_SERVER['REQUEST_URI']; // OR $_SERVER['REQUEST_URI']
$id = parse_url($url, PHP_URL_QUERY);
$koneksi = new mysqli("localhost", "id4889425_root", "password", "id4889425_foto");
if(mysqli_connect_errno()) {
	echo "Gagal melakukan koneksi ke MySQL: " . $koneksi->connect_error;
}
$sql = "select * FROM simpan WHERE ".$id;
$tampil = mysqli_query($koneksi,$sql);

while ($data = mysqli_fetch_array($tampil)){
	// Tampilkan Gambar
	echo '<img src="gambar/'.$data['gambar'].'" style="max-width: 100%"> <br>';
	echo '<textarea name="newcaption" placeholder="Caption Baru" class="form-control"> '.$data['keterangan'].'</textarea><br>';
}
  	mysqli_close($koneksi); 
  	?>
  	<hr><p>Verifikasi apakah anda benar benar pemilik foto?</p>
  	<input type="text" name="newemail" placeholder="Email" required class="form-control">
  	<input type="submit" class="btn btn-default" name="Submit"></button>
  	</form>
<?php
$url = $_SERVER['REQUEST_URI']; // OR $_SERVER['REQUEST_URI']
$id = parse_url($url, PHP_URL_QUERY);
$koneksi = new mysqli("localhost", "id4889425_root", "password", "id4889425_foto");
if(mysqli_connect_errno()) {
	echo "Gagal melakukan koneksi ke MySQL: " . $koneksi->connect_error;
}

  if (isset($_POST['submit'])){
  	// cek email dulu
  	$sql2 = "select email FROM simpan WHERE ".$id;
  	$data = mysqli_fetch_array(mysqli_query($koneksi,$sql2));
  	
  	if ($data['email'] === $_POST['newemail']) {
  	    $sql3 = "UPDATE simpan SET keterangan = '".$_POST['newcaption']."' WHERE ".$id;
  	    mysqli_query($koneksi, $sql3);
  	    echo "<script>alert('Caption Berhasil diupdate !');</script>"; 
  	} else {
  	    echo "<script>alert('Email salah !');</script>";
  	};
  };
  ?>
