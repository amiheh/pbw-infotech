<!DOCTYPE html>
<html>
<head>
	<title>Report Pengunjung</title>
</head>
<body>
	<center><h1>Report Pengunjung</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?> <?php echo anchor('crud/export','Export ke Excel'); ?>
</center>
	<?php 
		$label_baru = array();
		foreach($label as $u) {
			array_push($label_baru,$u["timestamp"]);
		};
		$timestamp_baru = array();
		foreach($timestamp as $u) {
			array_push($timestamp_baru,(float) $u["count"]);
		};
	?>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Timestamp</th>
			<th>Action</th>
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
			<td>
			      <?php echo anchor('crud/editt/'.$u->id,'Edit'); ?>
				  <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	
	<div></div>
	
<script src="<?php echo base_url();?>assets/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/highcharts-3d.js"></script>
<script src="<?php echo base_url();?>assets/exporting.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<div id="container" style="width: 600px; margin: 0 auto; max-width: 90%;"></div>

		<script type="text/javascript">

// Set up the chart
var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'container',
        type: 'column',
        options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
        }
    },
    title: {
        text: 'Statistik Pengunjung'
    },
    subtitle: {
        text: 'Berikut merupakan jumlah pengunjung website ini'
    },
    xAxis: {
        categories: <?php echo json_encode($label_baru); ?>,
        labels: {
            skew3d: true,
            style: {
                fontSize: '16px'
            }
        }
    },
    yAxis: {
        title: {
            text: null
        }
    },
    plotOptions: {
        column: {
            depth: 25
        }
    },
    series: [{
		name: 'Jumlah Pengunjung',
        data: <?php echo json_encode($timestamp_baru); ?>
    }]
});
		</script>

</body>
</html>