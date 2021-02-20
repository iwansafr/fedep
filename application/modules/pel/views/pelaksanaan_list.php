<?php

if (is_admin() || is_operator()) {
	$form = new Zea();

	$form->init('roll');
	$form->setHeading('Upaya dalam Melaksanakan Program dan Kinerja <a href="" class="btn btn-default">Refresh</a>');
	$form->setEditStatus(false);
	$form->setTable('pel_pelaksanaan');

	$form->addInput('id','plaintext');
	$form->setLabel('id','verifikasi');
	$form->setPlainText('id',[
		base_url('pel/pelaksanaan_verifikasi/{id}')=>'Verifikasi'
	]);

	$form->addInput('user_id','dropdown');
	$form->setAttribute('user_id','disabled');
	$form->tableOptions('user_id','user','id','username');
	$form->setLabel('user_id','cluster');

	$form->addInput('frekuensi','thumbnail');
	$form->setLabel('frekuensi','Frekuensi');
	$form->setCaption('frekuensi','Frekuensi Penyelenggaraan dialog (foto) (format gambar jpg dan png max 2mb)');
	
	$form->addInput('partisipasi','thumbnail');
	$form->setLabel('partisipasi','Partisipasi dan Kreatifitas');
	$form->setCaption('partisipasi','Tingkat partisipasi dan kreatifitas anggota FEDEP dalam dialog (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('agenda','thumbnail');
	$form->setLabel('agenda','Agenda Program');
	$form->setCaption('agenda','Kesesuaian agenda dialog dengan program dan kegiatan PEL (format gambar jpg dan png max 2mb)');

	$form->addInput('tindak_lanjut','thumbnail');
	$form->setLabel('tindak_lanjut','Tindak Lanjut');
	$form->setCaption('tindak_lanjut','Tindak lanjut terhadap hasil dialog (format gambar jpg dan png max 2mb)');

	$form->addInput('pembiayaan','thumbnail');
	$form->setLabel('pembiayaan','Pembiayaan');
	$form->setCaption('pembiayaan','Proposal alokasi pembiayaan dalam kegiatan (foto) (format gambar jpg dan png max 2mb)');

	$form->setNumbering(true);
	
	if(is_root() || is_admin())
	{
		$form->setDelete(true);
	}

	$form->form();
}else{
	msg('Anda tidak punya akses ke halaman ini','danger');
}