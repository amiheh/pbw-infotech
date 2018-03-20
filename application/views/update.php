  	<?php foreach ($content->result() as $key);  ?>
<form method="post" action="<?php echo base_url(); ?>crud/update/<?php echo $key->id ?>">
  <img src="gambar/<?php echo $key->gambar ?>" style="max-width: 100%"> <br>
  <textarea name="newcaption" placeholder="Caption Baru" class="form-control"><?php echo $key->keterangan ?></textarea><br>
    <input type="submit" class="btn btn-default" name="Submit"></button>
    </form>
  	<?php endforeach ?>


