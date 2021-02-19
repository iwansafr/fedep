<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Upaya Dalam Merencanakan Program dan Kegiatan PEL <a href="" class="btn btn-default">Refresh</a>');
$form->setEditStatus(false);
$form->setTable('pel_rencana');

if(is_admin() || is_operator())
{
	if (!empty($id)) {
		$form->setId($id);
		$form->addInput('produk','thumbnail');
		$form->setLabel('produk','Produk Perencanaan');
		$form->setCaption('produk','Adanya produk perencanaan yang terukur dan impelementatif (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_produk','dropdown');
		$form->setLabel('v_produk','Verifikasi produk');
		$form->setOptions('v_produk',['Tidak Valid','Valid']);
		
		$form->addInput('proses','thumbnail');
		$form->setLabel('proses','Proses Perencanaan');
		$form->setCaption('proses','Proses penyusunan perancangan melibatkan seluruh stakeholder FEDEP (baik panduan FEDEP) (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_proses','dropdown');
		$form->setLabel('v_proses','Verifikasi proses');
		$form->setOptions('v_proses',['Tidak Valid','Valid']);

		$form->addInput('instansi','thumbnail');
		$form->setLabel('instansi','Instansi Terkait');
		$form->setCaption('potensi','Sekretarian, Anggota, Pokja, maupun instansi terkait di luar forum (format gambar jpg dan png max 2mb)');

		$form->addInput('v_instansi','dropdown');
		$form->setLabel('v_instansi','Verifikasi instansi');
		$form->setOptions('v_instansi',['Tidak Valid','Valid']);

		$form->addInput('tindakan','thumbnail');
		$form->setLabel('tindakan','tindakan');
		$form->setCaption('tindakan','adanya tindakan lanjut terhadap perencanaan dan sinkronisasi dengan kegiatan SKPD (format gambar jpg dan png max 2mb)');

		$form->addInput('v_tindakan','dropdown');
		$form->setLabel('v_tindakan','Verifikasi tindakan');
		$form->setOptions('v_tindakan',['Tidak Valid','Valid']);


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