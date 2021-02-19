<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Upaya Dalam Merencanakan Program dan Kegiatan PEL <a href="" class="btn btn-default">Refresh</a>');
$form->setEditStatus(false);
$form->setTable('pel_rencana');

if(is_cluster())
{
	if (!empty($data['id'])) {
		$form->setId($data['id']);
	}

	$form->addInput('user_id','static');
	$form->setValue('user_id',$session['id']);

	$form->addInput('produk','file');
	$form->setLabel('produk','Produk Perencanaan');
	$form->setCaption('produk','Adanya produk perencanaan yang terukur dan impelementatif (foto) (format gambar jpg dan png max 2mb)');
	
	$form->addInput('proses','file');
	$form->setLabel('proses','Proses Perencanaan');
	$form->setCaption('proses','Proses penyusunan perancangan melibatkan seluruh stakeholder FEDEP (baik panduan FEDEP) (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('instansi','file');
	$form->setLabel('instansi','Instansi Terkait');
	$form->setCaption('potensi','Sekretarian, Anggota, Pokja, maupun instansi terkait di luar forum (format gambar jpg dan png max 2mb)');

	$form->addInput('tindakan','file');
	$form->setLabel('tindakan','tindakan');
	$form->setCaption('tindakan','adanya tindakan lanjut terhadap perencanaan dan sinkronisasi dengan kegiatan SKPD (format gambar jpg dan png max 2mb)');

	$form->form();
}else{
	msg('hanya akun cluster yang dapat mengakses halaman ini','danger');
}