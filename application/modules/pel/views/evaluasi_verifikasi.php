<?php

$form = new Zea();

$form->init('edit');
$form->setHeading('Evaluasi Capaian Program dan Kinerja PEL <a href="" class="btn btn-default">Refresh</a>');
$form->setEditStatus(false);
$form->setTable('pel_evaluasi');

if(is_admin() || is_operator())
{
	if (!empty($id)) {
		$form->setId($id);
		$form->addInput('keaktifan','thumbnail');
		$form->setLabel('keaktifan','Keaktifan');
		$form->setCaption('keaktifan','Keaktifan anggota Pokja (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_keaktifan','dropdown');
		$form->setLabel('v_keaktifan','Verifikasi keaktifan');
		$form->setOptions('v_keaktifan',['Tidak Valid','Valid']);

		$form->addInput('kesesuaian','thumbnail');
		$form->setLabel('kesesuaian','Kesesuaian Program');
		$form->setCaption('kesesuaian', 'Kesesuaian program dan kegiatan dengan rencana kegiatan (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_kesesuaian','dropdown');
		$form->setLabel('v_kesesuaian','Verifikasi kesesuaian');
		$form->setOptions('v_kesesuaian',['Tidak Valid','Valid']);

		$form->addInput('sinkronisasi','thumbnail');
		$form->setLabel('sinkronisasi','Sinkronisasi');
		$form->setCaption('sinkronisasi', 'Sinkronisasi dengan kegiatan SKPD (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_sinkronisasi','dropdown');
		$form->setLabel('v_sinkronisasi','Verifikasi sinkronisasi');
		$form->setOptions('v_sinkronisasi',['Tidak Valid','Valid']);

		$form->addInput('implementasi','thumbnail');
		$form->setLabel('implementasi','Implementasi');
		$form->setCaption('implementasi', 'Adanya implementasi rencana kegiatan(foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_implementasi','dropdown');
		$form->setLabel('v_implementasi','Verifikasi implementasi');
		$form->setOptions('v_implementasi',['Tidak Valid','Valid']);

		$form->addInput('finansial','thumbnail');
		$form->setLabel('finansial','Finansial');
		$form->setCaption('finansial', 'Adanya financial yang bersumber dari APBD/APBN dan non-APBD/APBN (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_finansial','dropdown');
		$form->setLabel('v_finansial','Verifikasi finansial');
		$form->setOptions('v_finansial',['Tidak Valid','Valid']);

		$form->addInput('rekomendasi','thumbnail');
		$form->setLabel('rekomendasi','Rekomendasi');
		$form->setCaption('rekomendasi', 'Menghasilkan rekomendasi formulasi kebijakan yang ditindaklanjuti (foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_rekomendasi','dropdown');
		$form->setLabel('v_rekomendasi','Verifikasi rekomendasi');
		$form->setOptions('v_rekomendasi',['Tidak Valid','Valid']);

		$form->addInput('evaluasi','thumbnail');
		$form->setLabel('evaluasi','Evaluasi');
		$form->setCaption('evaluasi', 'Adanya evaluasi terhadap seluruh capaian kegiatan(foto) (format gambar jpg dan png max 2mb)');

		$form->addInput('v_evaluasi','dropdown');
		$form->setLabel('v_evaluasi','Verifikasi evaluasi');
		$form->setOptions('v_evaluasi',['Tidak Valid','Valid']);



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