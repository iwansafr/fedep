<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php 

	// $link1 = $this->uri->rsegments[1];
	// $link2 = $this->uri->rsegments[2];
	
	// if ($link1 == 'dashboard') {
	// 	$mo0 = 'menu-open';
	// 	$ma0 = 'active';
	// 	if ($link2 == 'list') {
	// 		$d = 'active';
	// 	}
	// }

	// if ($link1 == 'user') {
	// 	$mo1 = 'menu-open';
	// 	$ma1 = 'active';
	// 	if ($link2 == 'list') {
	// 		$tau = 'active';
	// 	}elseif ($link2 == 'edit') {
	// 		$tu = 'active';
	// 	}
	// }

	// if ($link1 == 'question' || $link1 == 'responses') {
	// 	$mo2 = 'menu-open';
	// 	$ma2 = 'active';
	// }
	// if ($link1 == 'question' && $link2 == 'list') {
	// 	$q = 'active';
	// }elseif ($link1 == 'responses' && $link2 == 'list') {
	// 	$r = 'active';
	// }
	// elseif ($link1 == 'responses' && $link2 == 'view') {
	// 	$v = 'active';
	// }

	// if (($link1 == 'produk') || ($link1 == 'kelembagaan')) {
	// 	$mo4 = 'menu-open';
	// 	$ma4 = 'active';
	// 	if (($link1 == 'kelembagaan') && ($link2 == 'edit')) {
	// 		$kelembagaan = 'active';
	// 	}elseif (($link2 == 'list') || ($link2 == 'edit')) {
	// 		$pp = 'active';
	// 	}elseif ($link2 == 'permintaan') {
	// 		$pp1 = 'active';
	// 	}
	// }

	// if ($link1 == 'berita_cat' || $link1 == 'berita' || $link1 == 'galery') {
	// 	$mo3 = 'menu-open';
	// 	$ma3 = 'active';
	// }

	// if ($link1 == 'berita_cat') {
	// 	$bc = 'active';
	// }elseif ($link1 == 'berita') {
	// 	$b = 'active';
	// }elseif ($link1 == 'galery') {
	// 	$g = 'active';
	// }
 ?>

<li class="nav-item">
  <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Dashboard
    </p>
  </a>
</li>
<?php if (is_admin() || is_operator()): ?>
	<li class="nav-item has-treeview">
		<a href="#" class="nav-link">
			<i class="nav-icon fas fa-user-cog"></i>
			<p>
				User
				<i class="fas fa-angle-left right"></i>
			</p>
		</a>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("user") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Tampil all User</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("user/edit") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Tambah User</p>
				</a>
			</li>
		</ul>
	</li>
	<li class="nav-item has-treeview">
		<a href="#" class="nav-link">
			<i class="nav-icon fas fa-th-large"></i>
			<p>
				Content
				<i class="fas fa-angle-left right"></i>
			</p>
		</a>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("berita_cat") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>berita cat</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("berita") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>berita</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("galery") ?>" class="nav-link ">
					<i class="far fa-circle nav-icon"></i>
					<p>galery</p>
				</a>
			</li>
		</ul>
	</li>
<?php endif ?>

<li class="nav-item has-treeview">
	<a href="#" class="nav-link">
		<i class="nav-icon fas fa-chart-bar"></i>
		<p>
			Quesioner
			<i class="fas fa-angle-left right"></i>
		</p>
	</a>
	<?php if (is_admin() || is_operator()): ?>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("question") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>question</p>
				</a>
			</li>
		</ul>
	<?php endif ?>
	<ul class="nav nav-treeview">
		<li class="nav-item">
			<a href="<?php echo base_url("responses") ?>" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>responses</p>
			</a>
		</li>
	</ul>
	<?php if (is_cluster()): ?>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("responses/view") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>view</p>
				</a>
			</li>
		</ul>
	<?php endif ?>
</li>

<li class="nav-item has-treeview">
	<a href="#" class="nav-link">
		<i class="nav-icon fas fa-chart-bar"></i>
		<p>
			PEL
			<i class="fas fa-angle-left right"></i>
		</p>
	</a>
	<?php if (is_admin() || is_root() || is_operator()): ?>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("pel/kelembagaan_list") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Kelembagaan</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/kondisi_list") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Kondisi</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/rencana_list") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Rencana</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/pelaksanaan_list") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Pelaksanaan</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/evaluasi_list") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Evaluasi</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/chart") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Grafik</p>
				</a>
			</li>
		</ul>
	<?php endif ?>
	<?php if (is_cluster()): ?>

		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("kelembagaan/edit") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Profile</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/kelembagaan") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Kelembagaan</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/kondisi") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Kondisi</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/rencana") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Rencana</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/pelaksanaan") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Pelaksanaan</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url("pel/evaluasi") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Evaluasi</p>
				</a>
			</li>
		</ul>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("produk/list") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Pengajuan Produk</p>
				</a>
			</li>
		</ul>
	<?php endif ?>
	<?php if (is_pimpinan()): ?>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="<?php echo base_url("produk/permintaan") ?>" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Pengajuan Produk</p>
				</a>
			</li>
		</ul>
	<?php endif ?>
</li>