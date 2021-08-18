<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Kelengkapan Platform Kelembagaan PEL <a href="" class="btn btn-default">Refresh</a>');
$form->setEditStatus(false);
$form->setTable('pel_kelembagaan');

if(is_cluster())
{
	if (!empty($data['id'])) {
		$form->setId($data['id']);
	}
	$form->addInput('user_id','static');
	$form->setValue('user_id',$session['id']);
	$form->addInput('visi_misi','file');
	// $form->setAttribute('visi_misi',['disabled'=>'disabled']);
	$form->setLabel('visi_misi','Visi, Misi, Tujuan');
	$form->setAccept('visi_misi','.pdf');
	$form->setCaption('visi_misi','Visi, Misi, Tujuan Program dan Kegiatan (pdf) (format file pdf max 2mb)');
	$form->addInput('dok_sk','file');
	$form->setLabel('dok_sk','dokumentasi');
	$form->setCaption('dok_sk','Dokumentasi surat keputusan sejak awal berdiri hingga saat ini yang menjelaskan tentang struktur organisasi, pembagian tugas tenaga kerja, aturan main pelaksanaan, jangka waktu kepengurusan (foto) (format gambar jpg dan png max 2mb)');
	$form->addInput('dok_sekretariat','file');
	$form->setLabel('dok_sekretariat','sekretariat');
	$form->setCaption('dok_sekretariat','sekretariat untuk mendukung fungsi administrasi, komunikasi, dan pelaporan hasil monitoring dan evaluasi pelaksanaan program dan kegiatan (format gambar jpg dan png max 2mb)');

	$form->addInput('dok_pembiayaan','file');
	$form->setLabel('dok_pembiayaan','Pembiayaan FEDEP');
	$form->setCaption('dok_pembiayaan','Kerangka pembiayaan FEDEP untuk mengawal dialog, biaya perjalanan(dalam rangka koordinasi ke provinsi dan mitra FEDEP) (format gambar jpg dan png max 2mb)');

	$form->form();
}else{
	msg('hanya akun cluster yang dapat mengakses halaman ini','danger');
}