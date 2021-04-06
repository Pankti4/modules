<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function signup()
    {
        $this->load->view('assets/header');
        $this->load->view('signup');
        $this->load->view('assets/footer');
    }

    public function ajax_signup()
    {
        // Validation code
       $this->form_validation->set_rules('name', 'Name', 'trim|required');
       $this->form_validation->set_rules('email','Email','required|is_unique[user.email]');
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 
        'trim|required|matches[password]');
        //is_unique check the unique email value in users table

        if ($this->form_validation->run() == FALSE):
                $this->load->view('signup');            
        else :
            $data = array(
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'password'=>md5($this->input->post('password')),
            ); //insert code
            $this->db->insert('user',$data);
            unset($_POST);
            $this->load->view('formsuccess');
            //success page. 
        endif;
    }
}