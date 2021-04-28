<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->db->get('barang')->result_array();
		$this->load->view('index', $data);

	}

	public function tambah()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'ket' => $this->input->post('ket')
		];
		$this->db->insert('barang',$data);
		redirect(base_url('index.php/welcome/index'));		
	}

	public function update($id)
	{

		if ($this->input->post('nama')) {
			$data = [
				"nama" => $this->input->post('nama'),
				"harga" => $this->input->post('harga'),
				"ket" => $this->input->post('ket')
			];
			$this->db->where('id', $id);
			$this->db->update('barang', $data);
			redirect(base_url('index.php/welcome/index'));
		} else {
			$data['barang'] = $this->db->get_where('barang', ['id' => $id])->row_array();
			$this->load->view('update', $data);
		}
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('barang');
		redirect(base_url('index.php/welcome/index'));
	}
}
