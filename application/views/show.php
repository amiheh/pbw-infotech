  	<?php foreach ($content->result_array() as $key);  ?>
  	<div class='col-xs-6 col-md-6 foto-galeri' style='background-image: url(gambar/<?php echo $key["gambar"] ?>'>
  		<div class='captions'>
  			<?php echo $key['keterangan'] ?>
  			<br><br><br>
  			<a href='/edit/<?php echo $key["id"] ?>'>edit</a>
  			<a href='/delete/<?php echo $key["id"] ?>'>delete</a>
  		</div>
  	</div>
  	<?php endforeach ?>