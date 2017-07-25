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
      if($this->session->userdata('username'))
      {
        $this->load->view('success');
      }else {
        $this->load->view('signin');
      }

    }

    public function signin()
    {
      $this->form_validation->set_rules('username','Username','trim|required');
      $this->form_validation->set_rules('password','Password','trim|required');
      $this->form_validation->set_rules('signin_submit','Sign in','callback_check_login');

      if($this->form_validation->run() == false)
      {
        $this->load->view('signin');
      }else {
        $this->session->set_userdata('username',$this->input->post('username'));
        redirect(List_Test);
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

    public function check_login()
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      if(!$this->Users->checkLogin($username, $password))
      {
        $this->form_validation->set_message('check_login','Ten dang nhap hoac mat khau khong dung');
        return false;
      }else {
        return true;
      }
    }
  }
 ?>
