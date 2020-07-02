<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('hypovid/hypovid.php');
	}
	public function product()
	{
		$this->load->view('hypovid/bagian2.php');
	}
	public function home()
	{
		$this->load->view('hypovid/hypovid.php');
	}
	public function profile()
	{
		$this->load->view('hypovid/bagian1.php');
	}
	public function stock()
	{
		$this->load->view('admin/product/list.php');
	}
	public function laporan()
	{
		$this->load->view('hypovid/bagian4.php');
	}
	public function input()
	{
		$this->load->view('hypovid/add_form.php');
	}
	public function edit()
	{
		$this->load->view('hypovid/edit_profile.php');
	}
}
