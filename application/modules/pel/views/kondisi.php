<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Upaya Dalam Melakukan Pemetaan dan Analisa Kondisi PEL di Daerah <a href="" class="btn btn-default">Refresh</a>');
$form->setEditStatus(false);
$form->setTable('pel_kondisi');

if(is_cluster())
{
	if (!empty($data['id'])) {
		$form->setId($data['id']);
	}

	$form->addInput('user_id','static');
	$form->setValue('user_id',$session['id']);

	$form->addInput('kondisi','file');
	$form->setLabel('kondisi','Kondisi dan Perkembangan');
	$form->setCaption('kondisi','Data kondisi PEL dan perkembangannya (time series) secara berkelanjutan (foto) (format gambar jpg dan png max 2mb)');
	$form->addInput('hasil','file');

	$form->setLabel('hasil','Hasil Analisa');
	$form->setCaption('hasil','Hasil analisa data potensi PEL, yang mungkin dilakukan oleh BDS, mitra perguruan tinggi atau institusi pendamping lainnya (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('potensi','file');
	$form->setLabel('potensi','Peta Potensi');
	$form->setCaption('potensi','Peta Potensi PEL (format gambar jpg dan png max 2mb)');

	$form->addInput('klasifikasi','file');
	$form->setLabel('klasifikasi','Klasifikasi');
	$form->setCaption('klasifikasi','Klasifikasi potensi PEL, yang meliputi keberadaan klaster unggulan (format gambar jpg dan png max 2mb)');

	$form->addInput('inovasi','file');
	$form->setLabel('inovasi','Inovasi');
	$form->setCaption('inovasi','Inovasi dalam informasi profil klaster (foto) (format gambar jpg dan png max 2mb)');

	$form->form();
}else{
	msg('hanya akun cluster yang dapat mengakses halaman ini','danger');
}