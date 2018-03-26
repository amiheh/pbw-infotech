<?php foreach ($user as $u):  ?>
	<form method="post" action="<?php echo base_url(). 'crud/update'; ?>">
	<img src="gambar/<?php echo $u->gambar ?>" style="max-width: 100%"> <br>
	<textarea name="newcaption" placeholder="Caption Baru" class="form-control" value="<?php echo $u->keterangan ?>"></textarea><br>
    <input type="submit" class="btn btn-default" name="Submit"></button>
    </form>
<?php endforeach ?>