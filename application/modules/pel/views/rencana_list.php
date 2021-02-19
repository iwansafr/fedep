<?php

if (is_admin() || is_operator()) {
	$form = new Zea();

	$form->init('roll');
	$form->setHeading('Upaya Dalam Merencanakan Program dan Kegiatan PEL <a href="" class="btn btn-default">Refresh</a>');
	$form->setEditStatus(false);
	$form->setTable('pel_rencana');

	$form->addInput('id','plaintext');
	$form->setLabel('id','verifikasi');
	$form->setPlainText('id',[
		base_url('pel/rencana_verifikasi/{id}')=>'Verifikasi'
	]);

	$form->addInput('user_id','dropdown');
	$form->setAttribute('user_id','disabled');
	$form->tableOptions('user_id','user','id','username');
	$form->setLabel('user_id','cluster');

	$form->setNumbering(true);
	$form->addInput('produk','thumbnail');
	$form->setLabel('produk','Produk Perencanaan');
	$form->setCaption('produk','Adanya produk perencanaan yang terukur dan impelementatif (foto) (format gambar jpg dan png max 2mb)');
	
	$form->addInput('proses','thumbnail');
	$form->setLabel('proses','Proses Perencanaan');
	$form->setCaption('proses','Proses penyusunan perancangan melibatkan seluruh stakeholder FEDEP (baik panduan FEDEP) (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('instansi','thumbnail');
	$form->setLabel('instansi','Instansi Terkait');
	$form->setCaption('potensi','Sekretarian, Anggota, Pokja, maupun instansi terkait di luar forum (format gambar jpg dan png max 2mb)');

	$form->addInput('tindakan','thumbnail');
	$form->setLabel('tindakan','tindakan');
	$form->setCaption('tindakan','adanya tindakan lanjut terhadap perencanaan dan sinkronisasi dengan kegiatan SKPD (format gambar jpg dan png max 2mb)');

	if(is_root() || is_admin())
	{
		$form->setDelete(true);
	}

	$form->form();
}else{
	msg('Anda tidak punya akses ke halaman ini','danger');
}