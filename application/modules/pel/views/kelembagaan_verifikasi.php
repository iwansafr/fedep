<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Kelengkapan Platform Kelembagaan PEL');
$form->setEditStatus(false);
$form->setTable('pel_kelembagaan');

if(is_admin() || is_operator())
{
	if (!empty($id)) {
		$form->setId($id);
		$form->addInput('visi_misi','thumbnail');
		// $form->setAttribute('visi_misi',['disabled'=>'disabled']);
		$form->setLabel('visi_misi','Visi, Misi, Tujuan');
		$form->setCaption('visi_misi','Visi, Misi, Tujuan Program dan Kegiatan (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_visi_misi','dropdown');
		$form->setLabel('v_visi_misi','Verifikasi');
		$form->setOptions('v_visi_misi',['Tidak Valid','Valid']);

		$form->addInput('dok_sk','thumbnail');
		$form->setLabel('dok_sk','dokumentasi');
		$form->setCaption('dok_sk','Dokumentasi surat keputusan sejak awal berdiri hingga saat ini yang menjelaskan tentang struktur organisasi, pembagian tugas tenaga kerja, aturan main pelaksanaan, jangka waktu kepengurusan (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_dok_sk','dropdown');
		$form->setLabel('v_dok_sk','Verifikasi');
		$form->setOptions('v_dok_sk',['Tidak Valid','Valid']);

		$form->addInput('dok_sekretariat','thumbnail');
		$form->setLabel('dok_sekretariat','sekretariat');
		$form->setCaption('dok_sekretariat','sekretariat untuk mendukung fungsi administrasi, komunikasi, dan pelaporan hasil monitoring dan evaluasi pelaksanaan program dan kegiatan (format gambar jpg dan png max 2mb)');

		$form->addInput('v_dok_sekretariat','dropdown');
		$form->setLabel('v_dok_sekretariat','Verifikasi');
		$form->setOptions('v_dok_sekretariat',['Tidak Valid','Valid']);

		$form->addInput('dok_pembiayaan','thumbnail');
		$form->setLabel('dok_pembiayaan','Pembiayaan FEDEP');
		$form->setCaption('dok_pembiayaan','Kerangka pembiayaan FEDEP untuk mengawal dialog, biaya perjalanan(dalam rangka koordinasi ke provinsi dan mitra FEDEP) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_dok_pembiayaan','dropdown');
		$form->setLabel('v_dok_pembiayaan','Verifikasi');
		$form->setOptions('v_dok_pembiayaan',['Tidak Valid','Valid']);

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