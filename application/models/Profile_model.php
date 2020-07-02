<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    private $_table2 = "profile";

		public $nama;
		public $nomor;
		public $alamat;
		public $facebook;
		public $email;
		public $instagram;
		public $visi;
		public $motivasi;
		public $gbrtoko = "default.jpg";

	public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
			
			['field' => 'nomor',
            'label' => 'Nomor',
            'rules' => 'numeric'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
			
			['field' => 'facebook',
            'label' => 'Facebook',
            'rules' => 'required'],
			
			['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],
			
			['field' => 'instagram',
            'label' => 'Instagram',
            'rules' => 'required'],
			
			['field' => 'visi',
            'label' => 'Visi',
            'rules' => 'required'],
			
			['field' => 'motivasi',
            'label' => 'Motivasi',
            'rules' => 'required'],
        ];
    }

		public function getAll()
    {
		$this->db->from($this->_table2);
        return $this->db->getAll_results();
    }
	
	public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->nomor = $post["nomor"];
        $this->alamat = $post["alamat"];
		$this->facebook = $post["facebook"];
		$this->email = $post["email"];
		$this->instagram = $post["instagram"];
		$this->visi = $post["visi"];
		$this->motivasi = $post["motivasi"];
		$this->gbrtoko = $this->_uploadImage();
        $this->db->insert($this->_table2, $this);
    }
	
	public function update()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->nomor = $post["nomor"];
        $this->alamat = $post["alamat"];
		$this->facebook = $post["facebook"];
		$this->email = $post["email"];
		$this->instagram = $post["instagram"];
		$this->visi = $post["visi"];
		$this->motivasi = $post["motivasi"];
		if (!empty($_FILES["gbrtoko"]["name"])) {
			$this->gbrtoko = $this->_uploadImage();
		} else {
			$this->gbrtoko = $post["old_image"];
		}
	}
	
	private function _uploadImage()
{
    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->nama;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gbrtoko')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

}
