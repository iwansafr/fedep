<?php

if (is_admin() || is_operator()) {
	$form = new Zea();

	$form->init('roll');
	$form->setHeading('Kelengkapan Platform Kelembagaan PEL');
	$form->setEditStatus(false);
	$form->setTable('pel_kelembagaan');

	$form->addInput('id','plaintext');
	$form->setLabel('id','verifikasi');
	$form->setPlainText('id',[
		base_url('pel/kelembagaan_verifikasi/{id}')=>'Verifikasi'
	]);

	$form->addInput('user_id','dropdown');
	$form->setAttribute('user_id','disabled');
	$form->tableOptions('user_id','user','id','username');
	$form->setLabel('user_id','cluster');

	$form->setNumbering(true);
	$form->addInput('visi_misi','thumbnail');
	$form->setLabel('visi_misi','Visi, Misi, Tujuan');
	$form->setCaption('visi_misi','Visi, Misi, Tujuan Program dan Kegiatan (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('dok_sk','thumbnail');
	$form->setLabel('dok_sk','dokumentasi');
	$form->setCaption('dok_sk','Dokumentasi surat keputusan sejak awal berdiri hingga saat ini yang menjelaskan tentang struktur organisasi, pembagian tugas tenaga kerja, aturan main pelaksanaan, jangka waktu kepengurusan (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('dok_sekretariat','thumbnail');
	$form->setLabel('dok_sekretariat','sekretariat');
	$form->setCaption('dok_sekretariat','sekretariat untuk mendukung fungsi administrasi, komunikasi, dan pelaporan hasil monitoring dan evaluasi pelaksanaan program dan kegiatan (format gambar jpg dan png max 2mb)');

	$form->addInput('dok_pembiayaan','thumbnail');
	$form->setLabel('dok_pembiayaan','Pembiayaan FEDEP');
	$form->setCaption('dok_pembiayaan','Kerangka pembiayaan FEDEP untuk mengawal dialog, biaya perjalanan(dalam rangka koordinasi ke provinsi dan mitra FEDEP) (format gambar jpg dan png max 2mb)');

	$form->form();
}else{
	msg('Anda tidak punya akses ke halaman ini','danger');
}