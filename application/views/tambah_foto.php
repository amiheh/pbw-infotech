<p><center>Tampilkan foto terbaikmu dari Departemen Teknologi Informasi di laman ini.</center></p>
	<form method="post" action="<?php echo base_url(). 'crud/action_add'; ?>">
	<input type="text" name="email" placeholder="Email" required class="form-control"><br>
	<textarea name="caption" placeholder="Caption" class="form-control"></textarea><br>
	<input type="file" name="gambar" required><br>
	<input type="submit" value="UPLOAD" name="save" class="btn btn-info">
</form>

