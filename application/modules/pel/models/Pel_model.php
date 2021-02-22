<?php

class Pel_model extends CI_Model
{
	public function chart()
	{
		$data = [];
		$data['kelembagaan'] = $this->db->query('
			SELECT 
				SUM(v_visi_misi) AS visi_misi_done, COUNT(v_visi_misi) AS visi_misi_total ,
				COUNT(v_visi_misi) - SUM(v_visi_misi) AS v_visi_misi_selisih,
				SUM(v_dok_sk) AS dok_sk_done, COUNT(v_dok_sk) AS dok_sk_total ,
				COUNT(v_dok_sk) - SUM(v_dok_sk) AS v_dok_sk_selisih,
				SUM(v_dok_sekretariat) AS dok_sekretariat_done, COUNT(v_dok_sekretariat) AS dok_sekretariat_total ,
				COUNT(v_dok_sekretariat) - SUM(v_dok_sekretariat) AS v_dok_sekretariat_selisih,
				SUM(v_dok_pembiayaan) AS dok_pembiayaan_done, COUNT(v_dok_pembiayaan) AS dok_pembiayaan_total ,
				COUNT(v_dok_pembiayaan) - SUM(v_dok_pembiayaan) AS v_dok_pembiayaan_selisih,
				SUM(layak) AS layak_done, COUNT(layak) AS layak_total, 
				COUNT(layak) - SUM(layak) AS v_layak_selisih
			FROM pel_kelembagaan'
		)->row_array();
		$data['evaluasi'] = $this->db->query('
			SELECT 
				SUM(v_keaktifan) AS keaktifan_done, COUNT(v_keaktifan) AS keaktifan_total ,
				COUNT(v_keaktifan) - SUM(v_keaktifan) AS v_keaktifan_selisih,
				SUM(v_kesesuaian) AS kesesuaian_done, COUNT(v_kesesuaian) AS kesesuaian_total ,
				COUNT(v_kesesuaian) - SUM(v_kesesuaian) AS v_kesesuaian_selisih,
				SUM(v_sinkronisasi) AS sinkronisasi_done, COUNT(v_sinkronisasi) AS sinkronisasi_total ,
				COUNT(v_sinkronisasi) - SUM(v_sinkronisasi) AS v_sinkronisasi_selisih,
				SUM(v_implementasi) AS implementasi_done, COUNT(v_implementasi) AS implementasi_total ,
				COUNT(v_implementasi) - SUM(v_implementasi) AS v_implementasi_selisih,
				SUM(v_finansial) AS finansial_done, COUNT(v_finansial) AS finansial_total ,
				COUNT(v_finansial) - SUM(v_finansial) AS v_finansial_selisih,
				SUM(v_evaluasi) AS evaluasi_done, COUNT(v_evaluasi) AS evaluasi_total ,
				COUNT(v_evaluasi) - SUM(v_evaluasi) AS v_evaluasi_selisih,
				SUM(layak) AS layak_done, COUNT(layak) AS layak_total, 
				COUNT(layak) - SUM(layak) AS v_layak_selisih
			FROM pel_evaluasi'
		)->row_array();
		$data['kondisi'] = $this->db->query('
			SELECT 
				SUM(v_kondisi) AS kondisi_done, COUNT(v_kondisi) AS kondisi_total ,
				COUNT(v_kondisi) - SUM(v_kondisi) AS v_kondisi_selisih,
				SUM(v_hasil) AS hasil_done, COUNT(v_hasil) AS hasil_total ,
				COUNT(v_hasil) - SUM(v_hasil) AS v_hasil_selisih,
				SUM(v_potensi) AS potensi_done, COUNT(v_potensi) AS potensi_total ,
				COUNT(v_potensi) - SUM(v_potensi) AS v_potensi_selisih,
				SUM(v_klasifikasi) AS klasifikasi_done, COUNT(v_klasifikasi) AS klasifikasi_total ,
				COUNT(v_klasifikasi) - SUM(v_klasifikasi) AS v_klasifikasi_selisih,
				SUM(v_inovasi) AS inovasi_done, COUNT(v_inovasi) AS inovasi_total ,
				COUNT(v_inovasi) - SUM(v_inovasi) AS v_inovasi_selisih,
				SUM(layak) AS layak_done, COUNT(layak) AS layak_total, 
				COUNT(layak) - SUM(layak) AS v_layak_selisih
			FROM pel_kondisi'
		)->row_array();
		$data['pelaksanaan'] = $this->db->query('
			SELECT 
				SUM(v_frekuensi) AS frekuensi_done, COUNT(v_frekuensi) AS frekuensi_total ,
				COUNT(v_frekuensi) - SUM(v_frekuensi) AS v_frekuensi_selisih,
				SUM(v_partisipasi) AS partisipasi_done, COUNT(v_partisipasi) AS partisipasi_total ,
				COUNT(v_partisipasi) - SUM(v_partisipasi) AS v_partisipasi_selisih,
				SUM(v_agenda) AS agenda_done, COUNT(v_agenda) AS agenda_total ,
				COUNT(v_agenda) - SUM(v_agenda) AS v_agenda_selisih,
				SUM(v_tindak_lanjut) AS tindak_lanjut_done, COUNT(v_tindak_lanjut) AS tindak_lanjut_total ,
				COUNT(v_tindak_lanjut) - SUM(v_tindak_lanjut) AS v_tindak_lanjut_selisih,
				SUM(v_pembiayaan) AS pembiayaan_done, COUNT(v_pembiayaan) AS pembiayaan_total ,
				COUNT(v_pembiayaan) - SUM(v_pembiayaan) AS v_pembiayaan_selisih,
				SUM(layak) AS layak_done, COUNT(layak) AS layak_total, 
				COUNT(layak) - SUM(layak) AS v_layak_selisih
			FROM pel_pelaksanaan'
		)->row_array();
		$data['rencana'] = $this->db->query('
			SELECT 
				SUM(v_produk) AS produk_done, COUNT(v_produk) AS produk_total ,
				COUNT(v_produk) - SUM(v_produk) AS v_produk_selisih,
				SUM(v_proses) AS proses_done, COUNT(v_proses) AS proses_total ,
				COUNT(v_proses) - SUM(v_proses) AS v_proses_selisih,
				SUM(v_instansi) AS instansi_done, COUNT(v_instansi) AS instansi_total ,
				COUNT(v_instansi) - SUM(v_instansi) AS v_instansi_selisih,
				SUM(v_tindakan) AS tindakan_done, COUNT(v_tindakan) AS tindakan_total ,
				COUNT(v_tindakan) - SUM(v_tindakan) AS v_tindakan_selisih,
				SUM(layak) AS layak_done, COUNT(layak) AS layak_total, 
				COUNT(layak) - SUM(layak) AS v_layak_selisih
			FROM pel_rencana'
		)->row_array();
		// pr($data);die();
		return $data;
	}
}