<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class List_Test extends CI_Controller{
    public function __construct()
    {
      parent::__construct();
      $this->load->helper(array('url','form'));
      $this->load->library(array('form_validation','session'));
      $this->load->model('Users');
    }

    public function index()
    {
      $this->form_validation->set_rules('username','Username','require');
      $this->form_validation->set_rules('password','Password','require');

      if($this->form_validation->run() == FALSE)
      {
        $this->load->view('signin');
      }else {
        $this->load->view('signup');
      }

    }

    public function signup()
    {
      $this->form_validation->set_rules('username','Username','callback_check_username');
      $this->form_validation->set_rules('password','Password','trim|required');
      $this->form_validation->set_rules('passconf','Password Confirm','trim|required|matches[password]');
      $this->form_validation->set_rules('email','Email','required|valid_email');
      $this->form_validation->set_rules('phonenumber','Phone Number','required');


      if($this->form_validation->run() == FALSE)
      {
        $this->load->view('signup');
      }else {
        $userData = array(
          'username' => $this->input->post('username'),
          'pass' => $this->input->post('password'),
          'email' => $this->input->post('email'),
          'phonenumber' => $this->input->post('phonenumber')
        );

        if($this->Users->insertData($userData))
        {
          $this->session->set_userdata('username',$this->input->post('username'));
          $this->load->view('success');
        }else {
          echo 'That bai';
        }
      }

    }

    public function check_username()
    {
      $username = $this->input->post('username');
      if(!$this->Users->validUser($username))
      {
        $this->form_validation->set_message('check_username','User da duoc dang ky');
        return false;
      }else {
        return true;
      }
    }

    public function test()
    {
      $username = 'Phuc';
      if(!$this->Users->validUser($username))
      {
        echo 'Co roi';
      }else {
        echo 'Chua co';
      }
    }
  }
 ?>
