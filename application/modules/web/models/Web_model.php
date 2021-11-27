<?php defined('BASEPATH') or exit('No direct script access allowed');

class Web_model extends CI_model
{
	public function content($limit, $start, $id = 0)
	{
		$msg = [];

		if (!empty($this->input->get('berita'))) {
			$msg['berita'] = $this->db->get_where('berita', ['cat_id' => $this->input->get('berita')], $limit, $start)->result_array();
		} elseif (!empty($this->input->get('single'))) {
			$msg['berita'] = $this->db->get_where('berita', $limit, $start, ['id' => $this->input->get('single')])->row_array();
		} else {
			$msg['berita'] = $this->db->get('berita', $limit, $start)->result_array();
		}
		$msg['data'] = $this->db->get_where('galery', ['folder_id' => $id])->result_array();

		return $msg;
	}

	public function single_content($id = 0)
	{
		return $this->db->get_where('berita', ['id' => $this->input->get('single')])->row_array();
	}

	public function count_berita()
	{
		if (!empty($this->input->get('berita'))) {
			return $this->db->get_where('berita', ['cat_id' => $this->input->get('berita')])->num_rows();
		} else {
			return $this->db->get('berita')->num_rows();
		}
	}

	public function berita_cat($id = 0)
	{
		return $this->db->get('berita_cat')->result_array();
	}

	public function image_for()
	{
		if ($this->uri->rsegments[2] == 'list') {
			$fselect = $this->db->get_where('folder', ['deskripsi' => 'for-corousel'])->row_array();
			$msg = $this->db->get_where('galery', ['folder_id' => $fselect['id']])->result_array();
		} elseif ($this->uri->rsegments[2] == 'galery') {
			$fselect = $this->db->get_where('folder', ['deskripsi' => 'for-galery'])->row_array();
			$msg = $this->db->get_where('galery', ['folder_id' => $fselect['id']])->result_array();
		}
		return $msg;
	}
	public function add_umkm($data = array())
	{
		$msg = ['status' => 'danger', 'msg' => 'pendaftaran UMKM gagal'];
		$this->db->select('id');
		$exist = $this->db->get_where('user', ['username' => $data['username']])->row_array();
		if (empty($exist)) {

			if (!empty($_FILES['img']['name'])) {
				$format = "";
				if ($_FILES['img']['type'] == "image/png") {
					$format = ".png";
				} elseif ($_FILES['img']['type'] == "image/jpg") {
					$format = ".jpg";
				} elseif ($_FILES['img']['type'] == "image/jpeg") {
					$format = ".jpeg";
				} else {
					$$msg['msgs'][] = 'format file yang anda masukkan tidak didukung';
					return $msg;
				}

				$image_name = $this->input->post('nama') . $format;

				$config['upload_path']          = FCPATH . 'assets/images/user/';
				$config['allowed_types']        = '*';
				$config['max_size']             = 3048;
				$config['overwrite']			= true;
				$config['file_name'] = $image_name;

				$this->load->library('upload');
				$this->upload->initialize($config);
				$this->upload->do_upload('img');
			} else {
				$icek = $this->db->get_where('user_profile', ['user_id' => $id])->row_array();
				if (@$icek['img'] == null) {
					$image_name = 'admin.jpg';
				} else {
					$image_name = $icek['img'];
				}
			}

			if ($this->db->insert('user', [
				'password' => encrypt($data['password']),
				'username' => $data['username'],
				'email' => @$data['email'],
			])) {
				$msg = ['status' => 'success', 'msg' => 'UMKM berhasil didaftarkan catat username dan sandi untuk melakukan login ketika umkm sudah aktif'];
				$last_id = $this->db->insert_id();
				$msg['user_id'] = $last_id;
				$this->db->insert('user_profile', [
					'user_id' => $last_id,
					'nama' => $data['nama'],
					'img' => $image_name,
					'no_tlp' => $data['no_tlp'],
					'alamat' => $data['alamat'],
					'nama_usaha' => $data['nama_usaha'],
					'gender' => 1,
				]);

				$q = ['user_id' => $last_id, 'user_role_id' => 4];
				if (!$this->db->insert('user_has_role', $q)) {
					$msg['msgs'][] = 'role gagal disimpan';
				}
			}
		} else {
			$msg['msgs'][] = 'username sudah ada';
		}
		return $msg;
	}
}
