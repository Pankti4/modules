<?php
class Reg_model extends CI_Model
{
    public function saveCustomer()
    {
       $data['name'] = $this->input->post('name');
       $data['email'] = $this->input->post('email');
       $data['password'] = md5($this->input->post('password'));
       // $data['cpassword'] = $this->input->post('cpassword');
       $this->db->insert('user', $data);
    }
}