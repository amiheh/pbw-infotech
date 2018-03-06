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

<link href="./main.97292821.css" rel="stylesheet"></head>

<?php
$number = rand(0,3);
$number2 = rand(0,3);
while ($number == $number2) $number2 = rand(0,3);
$reason = array("Saat ini banyak terdapat hacker di dunia siber, oleh karena itu diperlukan anti keamanan siber dan aplikasi untuk mengurangi penipuan (fraud)", 
"Program Studi Teknologi Informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan awan, yang berkontribusi dalam meningkatkan kuantitas dan kualitas SDM, sehingga dapat meningkatkan efisiensi operasional organisasi.", 
"Memiliki kemampuan untuk menghasilkan SDM yang ahli dalam bidang integrasi sistem sebagai solusi untuk mendukung penanganan aplikasi-aplikasi di instansi pemerintahan (E-Gov)", 
"Memfasilitasi otomatisasi proses bisnis di organisasi untuk menghadapi perkembangan teknologi internet yang pesat dalam rangka mendukung pengembangan Teknologi Smart City");
# echo $reason[$number] . "<br>";
# echo $reason[$number2];


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

# echo "<br><br><br>" . $quote[$number3] . "<br>";
# echo $info[$number3][0] . $info[$number3][1];

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
                <a href="#contact-section-container" class="btn btn-primary btn-lg anchor-link" title="">Kenali Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>

<div class="section-container">
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
    <div class="image-column" style="background-image: url('./assets/images/img-01.jpg')"></div>
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
            <div class="col-xs-12 col-md-4">
                <div class="fa-container">
                    <i class="fa fa-shield fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Spesialis Keamanan Siber</h3>
                <p><em>Cyber Security Specialist</em></p>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="fa-container">
                    <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Analisis Keamanan Aplikasi</h3>
                <p><em>Application Security Analyst</em></p>
            </div>
			
            <div class="col-xs-12 col-md-4">
                <div class="fa-container">
                    <i class="fa fa-cloud-upload fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Pengembang Layanan Awan</h3>
                <p><em>Cloud Service Developer</em></p>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="fa-container">
                    <i class="fa fa-repeat fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Spesialis Integrasi Sistem</h3>
                <p><em>System Integration Specialist</em></p>
            </div>
			
            <div class="col-xs-12 col-md-4">
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
				<div style="padding: 40px; background-color: rgba(199,199,199,.5)"><?php echo $reason[$number] ?></div>
				<div style="padding: 40px; background-color: rgba(199,199,199,.5); margin-top: 5px"><?php echo $reason[$number2] ?></div>
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
            <div class="col-xs-12 col-md-4">
                <img src="http://hmtc.if.its.ac.id/wp-content/uploads/2013/10/1276188_702134413149000_219808502_o.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Laboratorium</h3>
                <p>Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Lab Teknologi <em>Smart City</em>). Seluruh Komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun kegiatan akademis lainnya.</p>
            </div>

            <div class="col-xs-12 col-md-4">
                <img src="https://static.wixstatic.com/media/ac60a3_5f65db02ae04446183bda83cc35fba18.jpg/v1/fill/w_768,h_576,al_c,lg_1,q_80/ac60a3_5f65db02ae04446183bda83cc35fba18.webp" alt="" class="img-responsive">
                <h3 class="text-center">Ruang Baca</h3>
                <p>Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan, dari bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD dan DVD. Selain itu juga menyediakan publikasi serial harian dan bulanan seperti surat kabar dan majalah.</p>
            </div>
            <div class="col-xs-12 col-md-4">
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
				<div style="padding: 10px; background-color: rgba(199,199,199,.5); margin-bottom: 5px; text-align: center; border-top-right-radius: 15px 40px; border-bottom-right-radius: 15px 40px;">Komputasi Awan dan Komputasi Terdistribusi Cloud</div>
				<div style="padding: 10px; background-color: rgba(199,199,199,.5); margin-bottom: 5px; text-align: center; border-top-right-radius: 15px 40px; border-bottom-right-radius: 15px 40px;">Arsitektur Web dan Pengembangan Framework</div>
				<div style="padding: 10px; background-color: rgba(199,199,199,.5); margin-bottom: 5px; text-align: center; border-top-right-radius: 15px 40px; border-bottom-right-radius: 15px 40px;">Rancangan Antarmuka Pengguna</div>
			</div>
			
            <div class="col-xs-12 col-md-6">
				<div style="padding: 10px; background-color: rgba(199,199,199,.5); margin-bottom: 5px; text-align: center; border-top-right-radius: 15px 40px; border-bottom-right-radius: 15px 40px;">Manajemen Penyimpanan Data</div>
				<div style="padding: 10px; background-color: rgba(199,199,199,.5); margin-bottom: 5px; text-align: center; border-top-right-radius: 15px 40px; border-bottom-right-radius: 15px 40px;">Keamanan Informasi dan Jaringan</div>
				<div style="padding: 10px; background-color: rgba(199,199,199,.5); margin-bottom: 5px; text-align: center; border-top-right-radius: 15px 40px; border-bottom-right-radius: 15px 40px;">Integrasi Perangkat Lunak dan Middleware</div>
				
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
                            <a href="https://www.twitter.com" class="fa-icon" title="">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
                            <a href="https://www.facebook.com" class="fa-icon" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com" class="fa-icon" title="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
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


<div class="section-container" id="contact-section-container">
    <div class="container contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-8">
                <div class="section-container-spacer">
                    <h2 class="text-center">Hubungi Kami</h2>
                </div>
                <form action="">
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
                        <textarea class="form-control" rows="3" placeholder="Pesan"></textarea>
                    </div>

                    <div class="form-group" style="float: left">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1">Kirimkan salinan
                        </label>
                    </div>

                    <button type="submit" class="btn btn-info" style="float: right">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function (event) {
    
  googleMapInit(); 
  scrollToAnchor();
  scrollRevelation('reveal');
});
</script>

<footer class="footer-container white-text-container">
    <div class="container">
        <div class="row">
                <div class="col-md-4">
					<img src="https://www.its.ac.id/wp-content/uploads/2017/07/logo.png" width="180px" /><br>
                </div>

                <div class="col-md-4">
                    <h4>Seleksi Masuk</h4>
                    <div>
						<a href="https://smits.its.ac.id/sarjana/#snmptn" target="_blank">SNMPTN</a><br>
						<a href="https://smits.its.ac.id/sarjana/#sbmptn" target="_blank">SBMPTN</a><br>
						<a href="https://smits.its.ac.id/sarjana/#pkm" target="_blank">PKM</a>
                    </div><br>
                    <div>
                        
                    </div>

                </div>

                <div class="col-md-4">
                        
                    <h4>Subscribe to newsletter</h4>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control footer-input-text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default btn-newsletter ">OK</button>
                            </div>
                        </div>
                        <p><small><br>Template by <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small></p>
                        
                    </div>
                </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
});
</script>


<script type="text/javascript" src="./main.faaf51f9.js"></script>
</body>
</html>