<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Upaya dalam Melaksanakan Program dan Kinerja <a href="" class="btn btn-default">Refresh</a>');
$form->setEditStatus(false);
$form->setTable('pel_pelaksanaan');

if(is_cluster())
{
	if (!empty($data['id'])) {
		$form->setId($data['id']);
	}

	$form->addInput('user_id','static');
	$form->setValue('user_id',$session['id']);

	$form->addInput('frekuensi','file');
	$form->setLabel('frekuensi','Frekuensi');
	$form->setCaption('frekuensi','Frekuensi Penyelenggaraan dialog (foto) (format gambar jpg dan png max 2mb)');
	
	$form->addInput('partisipasi','file');
	$form->setLabel('partisipasi','Partisipasi dan Kreatifitas');
	$form->setCaption('partisipasi','Tingkat partisipasi dan kreatifitas anggota FEDEP dalam dialog (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('agenda','file');
	$form->setLabel('agenda','Agenda Program');
	$form->setCaption('agenda','Kesesuaian agenda dialog dengan program dan kegiatan PEL (format gambar jpg dan png max 2mb)');

	$form->addInput('tindak_lanjut','file');
	$form->setLabel('tindak_lanjut','Tindak Lanjut');
	$form->setCaption('tindak_lanjut','Tindak lanjut terhadap hasil dialog (format gambar jpg dan png max 2mb)');

	$form->addInput('pembiayaan','file');
	$form->setLabel('pembiayaan','Pembiayaan');
	$form->setCaption('pembiayaan','Proposal alokasi pembiayaan dalam kegiatan (foto) (format gambar jpg dan png max 2mb)');

	$form->form();
}else{
	msg('hanya akun cluster yang dapat mengakses halaman ini','danger');
}