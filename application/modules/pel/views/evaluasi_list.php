<?php

if (is_admin() || is_operator()) {
	$form = new Zea();

	$form->init('roll');
	$form->setHeading('Evaluasi Capaian Program dan Kinerja PEL <a href="" class="btn btn-default">Refresh</a>');
	$form->setEditStatus(false);
	$form->setTable('pel_evaluasi');

	$form->addInput('id','plaintext');
	$form->setLabel('id','verifikasi');
	$form->setPlainText('id',[
		base_url('pel/evaluasi_verifikasi/{id}')=>'Verifikasi'
	]);

	$form->addInput('user_id','dropdown');
	$form->setAttribute('user_id','disabled');
	$form->tableOptions('user_id','user','id','username');
	$form->setLabel('user_id','cluster');

	$form->setNumbering(true);
	
	$form->addInput('keaktifan','thumbnail');
	$form->setLabel('keaktifan','Keaktifan');
	$form->setCaption('keaktifan','Keaktifan anggota Pokja (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('kesesuaian','thumbnail');
	$form->setLabel('kesesuaian','Kesesuaian Program');
	$form->setCaption('kesesuaian', 'Kesesuaian program dan kegiatan dengan rencana kegiatan (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('sinkronisasi','thumbnail');
	$form->setLabel('sinkronisasi','Sinkronisasi');
	$form->setCaption('sinkronisasi', 'Sinkronisasi dengan kegiatan SKPD (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('implementasi','thumbnail');
	$form->setLabel('implementasi','Implementasi');
	$form->setCaption('implementasi', 'Adanya implementasi rencana kegiatan(foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('finansial','thumbnail');
	$form->setLabel('finansial','Finansial');
	$form->setCaption('finansial', 'Adanya financial yang bersumber dari APBD/APBN dan non-APBD/APBN (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('rekomendasi','thumbnail');
	$form->setLabel('rekomendasi','Rekomendasi');
	$form->setCaption('rekomendasi', 'Menghasilkan rekomendasi formulasi kebijakan yang ditindaklanjuti (foto) (format gambar jpg dan png max 2mb)');

	$form->addInput('evaluasi','thumbnail');
	$form->setLabel('evaluasi','Evaluasi');
	$form->setCaption('evaluasi', 'Adanya evaluasi terhadap seluruh capaian kegiatan(foto) (format gambar jpg dan png max 2mb)');

	if(is_root() || is_admin())
	{
		$form->setDelete(true);
	}

	$form->form();
}else{
	msg('Anda tidak punya akses ke halaman ini','danger');
}