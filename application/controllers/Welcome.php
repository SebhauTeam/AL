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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                //$this->load->view('welcome_message');
                $this->load->model('Pros');
                //$this->Pros->GET_CONSTRAINTS("stu");
                
                $this->load->model('Desg');
                $this->load->model('Transaction_DB');
                //var_dump($_POST);
                if($_POST){
                    if($this->Desg->Chek_POST_Err($_POST,"stu")<1){
                       $this->Transaction_DB->inputdata($_POST,"stu");
                    }
                }
                $this->Desg->Create_From_Tabels("stu","","SEND",0);
                //echo validation_errors();
                //$this->form_validation->set_rules($this->Desg->Create_Validation());
                //echo $this->Desg->Get_Primary_Key("stu");
	}
}
