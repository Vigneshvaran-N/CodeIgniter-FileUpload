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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	/* public function index()
	{
		//$this->load->view('welcome_message');
		$data = $error = null;
		$this->load_.view('upload_forms',array('data'=>$data,'error'=>$error));
		 
		//$this->load->helper('url');
		//$this->load->view("upload_forms");
	}

	public function do_upload(){
		$config['upload_path']='./uploads/';
		$config['allowed_types']='jpg|png|pdf';
		$config['max_size']=10024;

		$this->load->library('upload',$config);

		if($this->upload->d0_upload('file')){
			$data = $this->upload->data();
			$error = null;

		}
		else{
			$error = $this->upload->display_errors();
			$data=null;
		}

		$this->load->view('upload_forms',array('data'->$data,'error'->$error));




	} 
 
*/
/* 
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
		}

 */		public function index(){
			$this->load->helper('url');
			$data = $error =null;
			$this->load->view('upload_forms',array('data'=>$data,'error'=>$error));
		}

		public function do_upload(){
			$this->load->helper('url');
			$config['upload_path'] = "./uploads/";
			$config['allowed_types'] = "jpg|png|pdf";
			$config['max_size'] = 100024;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('file')){
				$data = $this->upload->data();
				$error = null;
			}else{
				$error = $this->upload->display_errors();
				$data = null;
			}

			$this->load->view('upload_forms',array('data'=>$data,'error'=>$error));
			
		}

		
}






















