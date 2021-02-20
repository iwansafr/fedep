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
	$form->setLabel('keaktifan','Keaktifan');
	$form->setCaption('keaktifan','Keaktifan anggota Pokja (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('kesesuaian','file');
	$form->setLabel('kesesuaian','Kesesuaian Program');
	$form->setCaption('kesesuaian', 'Kesesuaian program dan kegiatan dengan rencana kegiatan (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('sinkronisasi','file');
	$form->setLabel('sinkronisasi','Sinkronisasi');
	$form->setCaption('sinkronisasi', 'Sinkronisasi dengan kegiatan SKPD (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('implementasi','file');
	$form->setLabel('implementasi','Implementasi');
	$form->setCaption('implementasi', 'Adanya implementasi rencana kegiatan(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('finansial','file');
	$form->setLabel('finansial','Finansial');
	$form->setCaption('finansial', 'Adanya financial yang bersumber dari APBD/APBN dan non-APBD/APBN (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('rekomendasi','file');
	$form->setLabel('rekomendasi','Rekomendasi');
	$form->setCaption('rekomendasi', 'Menghasilkan rekomendasi formulasi kebijakan yang ditindaklanjuti (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('evaluasi','file');
	$form->setLabel('evaluasi','Evaluasi');
	$form->setCaption('evaluasi', 'Adanya evaluasi terhadap seluruh capaian kegiatan(foto) (format gambar jpg dan png max 2mb)');

	$form->form();
}else{
	msg('hanya akun cluster yang dapat mengakses halaman ini','danger');
}