<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<center><h1>Report</h1></center>
</center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Timestamp</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->timestamp ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>