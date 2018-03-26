  	<?php foreach($simpan as $u):  ?>
  	<div class='col-xs-6 col-md-6 foto-galeri' style='background-image: url(gambar/<?php echo $u->gambar ?>'>
  		<div class='captions'>
  			<?php echo $u->keterangan ?>
  			<br><br><br>
			<?php echo anchor('edit/'.$u->id, 'Edit'); ?>
			<?php echo anchor('delete/'.$u->id, 'Delete'); ?>
  		</div>
  	</div>
  	<?php endforeach ?>