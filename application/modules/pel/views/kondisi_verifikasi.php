<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Kelengkapan Platform Kelembagaan PEL');
$form->setEditStatus(false);
$form->setTable('pel_kondisi');

if(is_admin() || is_operator())
{
	if (!empty($id)) {
		$form->setId($id);
		$form->addInput('kondisi','thumbnail');
		$form->setLabel('kondisi','Kondisi dan Perkembangan');
		$form->setCaption('kondisi','Data kondisi PEL dan perkembangannya (time series) secara berkelanjutan (foto) (format gambar jpg dan png max 2mb)');
		$form->addInput('v_kondisi','dropdown');
		$form->setOptions('v_kondisi',['Tidak Valid','Valid']);
		

		$form->addInput('hasil','thumbnail');
		$form->setLabel('hasil','Hasil Analisa');
		$form->setCaption('hasil','Hasil analisa data potensi PEL, yang mungkin dilakukan oleh BDS, mitra perguruan tinggi atau institusi pendamping lainnya (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_hasil','dropdown');
		$form->setOptions('v_hasil',['Tidak Valid','Valid']);

		$form->addInput('potensi','thumbnail');
		$form->setLabel('potensi','Peta Potensi');
		$form->setCaption('potensi','Peta Potensi PEL (format gambar jpg dan png max 2mb)');


	$form->addInput('v_potensi','dropdown');
	$form->setOptions('v_potensi',['Tidak Valid','Valid']);
		$form->addInput('klasifikasi','thumbnail');
		$form->setLabel('klasifikasi','Klasifikasi');
		$form->setCaption('klasifikasi','Klasifikasi potensi PEL, yang meliputi keberadaan klaster unggulan (format gambar jpg dan png max 2mb)');


	$form->addInput('v_klasifikasi','dropdown');
	$form->setOptions('v_klasifikasi',['Tidak Valid','Valid']);
		$form->addInput('inovasi','thumbnail');
		$form->setLabel('inovasi','Inovasi');
		$form->setCaption('inovasi','Inovasi dalam informasi profil klaster (foto) (format gambar jpg dan png max 2mb)');


	$form->addInput('v_inovasi','dropdown');
	$form->setOptions('v_inovasi',['Tidak Valid','Valid']);
		$form->addInput('nilai','text');

		$form->setType('nilai','number');
		$form->setLabel('nilai','Nilai');

		$form->addInput('layak','dropdown');
		$form->setLabel('layak','kelayakan');
		$form->setOptions('layak',['Tidak Layak','Layak']);

		$form->form();
	}else{
		msg('halaman tidak diketahui','danger');
	}
}else{
	msg('hanya akun cluster yang dapat mengakses halaman ini','danger');
}