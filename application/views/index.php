<!-- Add your content of head and header -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Teknologi Informasi" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="" rel="apple-touch-icon">
  <link href="" rel="icon">

  <title>Teknologi Informasi ITS</title>  

<link href="./assets/main.css" rel="stylesheet"></head>
<link href="./assets/tambahan.css" rel="stylesheet"></head>

<?php
# mengapa teknologi informasi?
$number = rand(0,3);
$number2 = rand(0,3);
while ($number == $number2) $number2 = rand(0,3);
$reason = array("Saat ini banyak terdapat hacker di dunia siber, oleh karena itu diperlukan anti keamanan siber dan aplikasi untuk mengurangi penipuan (fraud)", 
"Program Studi Teknologi Informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan awan, yang berkontribusi dalam meningkatkan kuantitas dan kualitas SDM, sehingga dapat meningkatkan efisiensi operasional organisasi.", 
"Memiliki kemampuan untuk menghasilkan SDM yang ahli dalam bidang integrasi sistem sebagai solusi untuk mendukung penanganan aplikasi-aplikasi di instansi pemerintahan (E-Gov)", 
"Memfasilitasi otomatisasi proses bisnis di organisasi untuk menghadapi perkembangan teknologi internet yang pesat dalam rangka mendukung pengembangan Teknologi Smart City");

# apa kata mereka?
$number3 = rand(0,4);
$quote = array(
"Kegiatan siber nasional terutama pengamatan siber ini merupakan keharusan, keniscayaan..",
"Suatu hari nanti komputasi akan menjadi infrastruktur publik seperti listrik dan telepon.",
"Smart City menciptakan perubahan sistem lebih efektif dan efisien dalam lembaga pemerintahan.",
"Jika kita tidak memecahkan masalah keamanan, maka orang-orang akan ragu.",
"Sistem yang terintegrasi dalam suatu perusahaan dapat meningkatkan penghematan atau efisiensi"
);
$info = array(
	array("Wiranto", "Menkopolhukam"),
	array("John McCarty", "Pakar Komputasi MIT"),
	array("Rudiantara", "Menkominfo"),
	array("Bill Gates", "Microsoft"),
	array("Darwin Widjaja", "Praktisi Teknologi Informasi")
);
?>

<body>

 <!-- Add your content of header -->
<header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="navbar-collapse">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/" title="" class="anchor-link">Profil</a></li>
            <li><a href="/" title="" class="anchor-link">Akademik</a></li>
            <li><a href="/" title="" class="anchor-link">Kurikulum</a></li>
            <li><a href="/" title="" class="anchor-link">Staf</a></li>
            <li><a href="/" title="" class="anchor-link">Fasilitas</a></li>
            <li><a href="/" title="" class="anchor-link">Prestasi</a></li>
            <li><a href="/" title="" class="anchor-link">Agenda</a></li>
			<!--<li><a href="/" class="btn btn-default navbar-btn">Log In</a></li>-->
        </ul>

      </div>
    </div>
  </nav>
</header>



<!-- Add your site or app content here -->
<div class="background-image-container white-text-container" style="background-image: url('http://1.bp.blogspot.com/-PhjNrDZOiA0/U93nEsw3PdI/AAAAAAAAArk/BlQsHENkliA/s1600/teknik-informatika-its.jpg'); background-position: bottom">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p style="margin-bottom: -23px;">Program Studi Sarjana (S1)</p>
                <h1>Teknologi Informasi</h1>
                <p class="">Fakultas Teknologi Informasi & Komunikasi<br>
Institut Teknologi Sepuluh Nopember
				</p>
                <a href="#more" class="btn btn-primary btn-lg anchor-link" title="">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="section-container" id="more">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Visi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h3 class="text-center"></h3>
                <p><big><center>"Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan teknologi berbasis Internet (Internet of Things) untuk mendukung pembangunan Smart City secara berkelanjutan hingga tahun 2022."</center></big></p>
            </div>
        </div>
    </div>
</div>

	

<div class="section-container section-half-background-image-container">
    <div class="image-column" style="background-image: url('./img-01.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="section-label reveal">
                <p style="text-align: center">MI<br>SI</p>
            </div>
            <div class="col-md-6 col-md-offset-6 text-column">
                <h2>Misi Departemen Teknologi Informasi</h2>
				<ol>
					<li>Menyelenggarakan pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai. </li>
					<li>Melaksanakan penelitian yang bermutu di bidang Keamanan Siber dan Internet of Things untuk teknologi Smart City.</li>
					<li>Menjalin kemitraan dengan instansi dalam maupun luar negeri. </li>
					<li>Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembagan potensi dan pemberdayaan masyarakat daerah.</li>
				</ol>
            </div>
        </div>
    </div>
</div>
	
	
	
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 section-container-spacer">
                <h2>Profil<br>Lulusan</h2>
            </div>
        <div class="col-xs-12 col-md-6" id="profil" style="text-align: center">
            <div class="col-xs-12 col-md-4 reveal">
                <div class="fa-container">
                    <i class="fa fa-shield fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Spesialis Keamanan Siber</h3>
                <p><em>Cyber Security Specialist</em></p>
            </div>

            <div class="col-xs-12 col-md-4 reveal">
                <div class="fa-container">
                    <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Analisis Keamanan Aplikasi</h3>
                <p><em>Application Security Analyst</em></p>
            </div>
			
            <div class="col-xs-12 col-md-4 reveal">
                <div class="fa-container">
                    <i class="fa fa-cloud-upload fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Pengembang Layanan Awan</h3>
                <p><em>Cloud Service Developer</em></p>
            </div>
            <div class="col-xs-12 col-md-4 reveal">
                <div class="fa-container">
                    <i class="fa fa-repeat fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Spesialis Integrasi Sistem</h3>
                <p><em>System Integration Specialist</em></p>
            </div>
			
            <div class="col-xs-12 col-md-4 reveal">
                <div class="fa-container">
                    <i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Spesialis Internet Of Things</h3>
                <p><em>Internet Of Things Specialist</em></p>
            </div>
			</div>
        </div>
    </div>
</div>

<div class="section-container section-half-background-image-container">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-column">
                <h2>Mengapa <br>Teknologi Informasi?</h2>
            </div>
            <div class="col-md-6 text-column">
				<div style="padding: 40px; background-color: rgba(199,199,199,.5)" class=" reveal"><?php echo $reason[$number] ?></div>
				<div style="padding: 40px; background-color: rgba(199,199,199,.5); margin-top: 5px" class=" reveal"><?php echo $reason[$number2] ?></div>
            </div>
        </div>
    </div>
</div>

<div class="section-container section-half-background-image-container" style="background:#2b2b2b;color:#ddd;">
    <div class="container">
        <div class="row">
            <div class=" col-md-offset-1 col-md-10">
                <h2 class="text-center"><small style="color: white"><?php echo $quote[$number3] ?></small></h2>
					<center><b><?php echo $info[$number3][0] ?></b></strong>, <em><?php echo $info[$number3][1] ?></em></center>
            </div>
        </div>
    </div>
</div>
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Fasilitas</h2>
            </div>
        </div>
        <div class="row" id="fasilitas">
            <div class="col-xs-12 col-md-4 reveal">
                <img src="http://hmtc.if.its.ac.id/wp-content/uploads/2013/10/1276188_702134413149000_219808502_o.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Laboratorium</h3>
                <p>Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Lab Teknologi <em>Smart City</em>). Seluruh Komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun kegiatan akademis lainnya.</p>
            </div>

            <div class="col-xs-12 col-md-4 reveal">
                <img src="https://static.wixstatic.com/media/ac60a3_5f65db02ae04446183bda83cc35fba18.jpg/v1/fill/w_768,h_576,al_c,lg_1,q_80/ac60a3_5f65db02ae04446183bda83cc35fba18.webp" alt="" class="img-responsive">
                <h3 class="text-center">Ruang Baca</h3>
                <p>Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan, dari bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD dan DVD. Selain itu juga menyediakan publikasi serial harian dan bulanan seperti surat kabar dan majalah.</p>
            </div>
            <div class="col-xs-12 col-md-4 reveal">
                <img src="http://pikti.if.its.ac.id/wp-content/uploads/2017/09/WA-IMAGE-1-768x576.jpeg" alt="" class="img-responsive">
                <h3 class="text-center">Ruang Kelas</h3>
                <p>Setiap ruang kelas dilengkapi dengan pendingin ruangan dan LCD serta akses internet gratis yang dapat mendukung kegiatan akademis mahasiswa.</p>
            </div>
        </div>
    </div>
</div>

<div class="section-container section-half-background-image-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Jenis Peluang Kerja</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
				<div class="list">Komputasi Awan dan Komputasi Terdistribusi Cloud</div>
				<div class="list">Arsitektur Web dan Pengembangan Framework</div>
				<div class="list">Rancangan Antarmuka Pengguna</div>
			</div>
			
            <div class="col-xs-12 col-md-6">
				<div class="list">Manajemen Penyimpanan Data</div>
				<div class="list">Keamanan Informasi dan Jaringan</div>
				<div class="list">Integrasi Perangkat Lunak dan Middleware</div>
				
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class='container-fluid'>
        <div class="row map-container">
            <div id="map"></div>
            <div class="col-xs-10 col-md-4 contact-block-container reveal">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h3>Kontak</h3>
                        <p>
                            (031) 5994251
                        </p>

                        <h3>E-mail</h3>
                        <p>teknologi.informasi<br>
							@its.ac.id</p>

                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <h3>Alamat</h3>
                        <p>Teknik Informatika ITS<br />
						Sukolilo, Surabaya</p>

                        <h3>Jam Kerja</h3>
                        <p>Mon - Fri : 7AM - 4PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-container section-half-background-image-container" style="background:  #333;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="col-xs-12 col-md-12">
                  	<?php echo $show_photos; ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-md-6">
                <div class="col-xs-12 col-md-12">
                    <h2 style="color:  white;" class="text-center section-container-spacer">Tambahkan Foto</h2>
                </div>
                <?php echo $add_photos; ?>
                </div>
        </div>
    </div>
</div>

<div class="section-container section-half-background-image-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2>Jalur<br>Seleksi Masuk</h2>
            </div>
            <div class="col-xs-12 col-md-6">
				<div class="listb"><a href="https://snmptn.ac.id" target="_blank" style="text-decoration: none"><big>SNMPTN</big></a></div>
				<div class="listb"><a href="https://sbmptn.ac.id" target="_blank" style="text-decoration: none"><big>SBMPTN</big></a></div>
				<div class="listb"><a href="https://smits.its.ac.id/sarjana/#pkm" target="_blank" style="text-decoration: none"><big>PKM</big></a></div>
            </div>
        </div>
    </div>
</div>

<div class="section-container" id="contact-section-container">
    <div class="container contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-8">
                <div id="status"></div>
                <div class="section-container-spacer">
                    <h2 class="text-center">Hubungi Kami</h2>
                </div>
                <div id="success" class="section-container-spacer"></div>
                <form action="contact.php" method="post" id="form-email">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="subject" placeholder="Judul"></textarea>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="3" placeholder="Pesan"></textarea>
                    </div>

                    <button type="submit" class="btn btn-info" id="btn-email">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function (event) {
    
  googleMapInit(); 
  scrollToAnchor();
  scrollRevelation('reveal');
});

$(document).ready(function(){
    $('#btn-email').click(function(){
        $.post("contact.php", $("#form-email").serialize(), function(response) {
            $('#success').html(response).fadeIn(500).delay(800).fadeOut(300);
        });
        return false;
    });
});
</script>

<footer class="footer-container white-text-container">
    <div class="container">
        <div class="row">
                <div class="col-md-12" style="text-align: center">
                            <a href="https://www.twitter.com" class="fa-icon" title="">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
                            <a href="https://www.facebook.com" class="fa-icon" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com" class="fa-icon" title="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
});
</script>


<script type="text/javascript" src="./assets/main.faaf51f9.js"></script>
</body>
</html>