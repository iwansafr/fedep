<?php foreach ($data as $key => $value): ?>
	<h4><?= $key ?></h4>
	<div class="row">
		<?php foreach ($value as $vkey => $vvalue): ?>
			<?php if (preg_match('~(.*?)_total~', $vkey)): ?>
				<div class="col-lg-3">
				  <div class="card mb-3">
				    <div class="card-header">
				      <i class="fas fa-chart-pie"></i>
				      <?= str_replace('_total','',$vkey) ?></div>
				    <div class="card-body">
				      <canvas id="<?= $key.'_'.$vkey ?>" width="100%" height="100"></canvas>
				    </div>
				    <div class="card-footer small text-muted">Total Data : <?= $vvalue ?></div>
				  </div>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
<?php endforeach ?>
<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>
<script>

Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

<?php foreach ($data as $key => $value): ?>
	<?php $i = 1; ?>
	<?php foreach ($value as $vkey => $vvalue): ?>
		<?php if (preg_match('~(.*?)_total~', $vkey)): ?>
			var ctx<?php echo $i;?> = document.getElementById("<?php echo $key.'_'.$vkey;?>");
			var <?php echo $key.'_'.$vkey;?> = new Chart(ctx<?php echo $i;?>, {
			  type: 'pie',
			  data: {
			    labels: ["Valid", "Tidak Valid"],
			    datasets: [{
			      data: [<?php echo $vvalue;?>, <?php echo $value['v_'.str_replace('_total','',$vkey).'_selisih'];?>],
			      backgroundColor: ['#007bff', '#dc3545'],
			    }],
			  },
			});
		<?php endif ?>
		<?php $i++; ?>
	<?php endforeach ?>
<?php endforeach ?>
</script>