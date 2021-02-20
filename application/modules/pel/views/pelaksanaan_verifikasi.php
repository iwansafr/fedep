<?php

if (is_admin() || is_operator()) {
	$form = new Zea();

	$form->init('edit');
	$form->setHeading('Upaya dalam Melaksanakan Program dan Kinerja <a href="" class="btn btn-default">Refresh</a>');
	$form->setEditStatus(false);
	$form->setTable('pel_pelaksanaan');

	if (!empty($id)) {
		$form->setId($id);
		
		$form->addInput('frekuensi','thumbnail');
		$form->setLabel('frekuensi','Frekuensi');
		$form->setCaption('frekuensi','Frekuensi Penyelenggaraan dialog (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_frekuensi','dropdown');
		$form->setOptions('v_frekuensi',['Tidak Valid','Valid']);
		$form->setLabel('v_frekuensi', 'Verifikasi Frekuensi');
		
		$form->addInput('partisipasi','thumbnail');
		$form->setLabel('partisipasi','Partisipasi dan Kreatifitas');
		$form->setCaption('partisipasi','Tingkat partisipasi dan kreatifitas anggota FEDEP dalam dialog (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_partisipasi','dropdown');
		$form->setOptions('v_partisipasi',['Tidak Valid','Valid']);
		$form->setLabel('v_partisipasi', 'Verifikasi Partisipasi');

		$form->addInput('agenda','thumbnail');
		$form->setLabel('agenda','Agenda Program');
		$form->setCaption('agenda','Kesesuaian agenda dialog dengan program dan kegiatan PEL (format gambar jpg dan png max 2mb)');

		$form->addInput('v_agenda','dropdown');
		$form->setOptions('v_agenda',['Tidak Valid','Valid']);
		$form->setLabel('v_agenda', 'Verifikasi Program');

		$form->addInput('tindak_lanjut','thumbnail');
		$form->setLabel('tindak_lanjut','Tindak Lanjut');
		$form->setCaption('tindak_lanjut','Tindak lanjut terhadap hasil dialog (format gambar jpg dan png max 2mb)');

		$form->addInput('v_tindak_lanjut','dropdown');
		$form->setOptions('v_tindak_lanjut',['Tidak Valid','Valid']);
		$form->setLabel('v_tindak_lanjut', 'Verifikasi Lanjut');

		$form->addInput('pembiayaan','thumbnail');
		$form->setLabel('pembiayaan','Pembiayaan');
		$form->setCaption('pembiayaan','Proposal alokasi pembiayaan dalam kegiatan (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_pembiayaan','dropdown');
		$form->setOptions('v_pembiayaan',['Tidak Valid','Valid']);
		$form->setLabel('v_pembiayaan', 'Verifikasi Pembiayaan');


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
	msg('Anda tidak punya akses ke halaman ini','danger');
}