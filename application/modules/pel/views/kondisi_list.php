<?php

if (is_admin() || is_operator()) {
	$form = new Zea();

	$form->init('roll');
	$form->setHeading('Kelengkapan Platform Kondisi PEL');
	$form->setEditStatus(false);
	$form->setTable('pel_kondisi');

	$form->addInput('id','plaintext');
	$form->setLabel('id','verifikasi');
	$form->setPlainText('id',[
		base_url('pel/kondisi_verifikasi/{id}')=>'Verifikasi'
	]);

	$form->addInput('user_id','dropdown');
	$form->setAttribute('user_id','disabled');
	$form->tableOptions('user_id','user','id','username');
	$form->setLabel('user_id','cluster');

	$form->setNumbering(true);
	$form->addInput('kondisi','thumbnail');
	$form->setLabel('kondisi','Kondisi dan Perkembangan');
	$form->addInput('hasil','thumbnail');

	$form->setLabel('hasil','Hasil Analisa');

	$form->addInput('potensi','thumbnail');
	$form->setLabel('potensi','Peta Potensi');

	$form->addInput('klasifikasi','thumbnail');
	$form->setLabel('klasifikasi','Klasifikasi');

	$form->addInput('inovasi','thumbnail');
	$form->setLabel('inovasi','Inovasi');

	if(is_root() || is_admin())
	{
		$form->setDelete(true);
	}

	$form->form();
}else{
	msg('Anda tidak punya akses ke halaman ini','danger');
}