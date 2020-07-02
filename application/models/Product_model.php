<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "stok";

    public $id;
    public $merek;
    public $klasifikasi;
	public $stok;
	public $hpp;
	public $harga;
	public $laba;
    public $gbrmenu = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'merek',
            'label' => 'Merek',
            'rules' => 'required'],
			
			['field' => 'klasifikasi',
            'label' => 'Klasifikasi',
            'rules' => 'required'],

            ['field' => 'stok',
            'label' => 'Stok',
            'rules' => 'numeric'],
			
			['field' => 'hpp',
            'label' => 'Hpp',
            'rules' => 'numeric'],
			
			['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],
			
			['field' => 'laba',
            'label' => 'Laba',
            'rules' => 'numeric'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
	public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->merek = $post["merek"];
        $this->klasifikasi = $post["klasifikasi"];
		$this->stok = $post["stok"];
		$this->hpp = $post["hpp"];
		$this->harga = $post["harga"];
		$this->laba = $post["laba"];
		$this->gbrmenu = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->merek = $post["merek"];
        $this->klasifikasi = $post["klasifikasi"];
		$this->stok = $post["stok"];
		$this->hpp = $post["hpp"];
		$this->harga = $post["harga"];
		$this->laba = $post["laba"];
		if (!empty($_FILES["gbrmenu"]["name"])) {
			$this->gbrmenu = $this->_uploadImage();
		} else {
			$this->gbrmenu = $post["old_image"];
		}
		
        
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }
	
	private function _uploadImage()
{
    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gbrmenu')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

	private function _deleteImage($id)
{
    $product = $this->getById($id);
    if ($product->gbrmenu	!= "default.jpg") {
	    $filename = explode(".", $product->gbrmenu)[0];
		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    }
}
}