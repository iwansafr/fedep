<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Evaluasi Capaian Program dan Kinerja PEL <a href="" class="btn btn-default">Refresh</a>');
$form->setEditStatus(false);
$form->setTable('pel_evaluasi');

if(is_cluster())
{
	if (!empty($data['id'])) {
		$form->setId($data['id']);
	}

	$form->addInput('user_id','static');
	$form->setValue('user_id',$session['id']);

	$form->addInput('keaktifan','file');
	$form->setLabel('keaktifan','');
	$form->setCaption('keaktifan','(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('kesesuaian','file');
	$form->setLabel('kesesuaian','');
	$form->setCaption('kesesuaian', '(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('sinkronisasi','file');
	$form->setLabel('sinkronisasi','');
	$form->setCaption('sinkronisasi', '(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('implementasi','file');
	$form->setLabel('implementasi','');
	$form->setCaption('implementasi', '(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('finansial','file');
	$form->setLabel('finansial','');
	$form->setCaption('finansial', '(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('rekomendasi','file');
	$form->setLabel('rekomendasi','');
	$form->setCaption('rekomendasi', '(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('evaluasi','file');
	$form->setLabel('evaluasi','');
	$form->setCaption('evaluasi', '(foto) (format gambar jpg dan png max 2mb)');

	$form->form();
}else{
	msg('hanya akun cluster yang dapat mengakses halaman ini','danger');
}