<?php
  class Users extends CI_Model{
    private $table_name;

    public function __construct()
    {
      parent::__construct();
      $this->table_name = 'UserInfo';

      $this->load->database();
    }

    public function validUser($username)
    {
      $this->db->select('username');
      $this->db->where('username',$username);
      $this->db->from($this->table_name);

      return $this->db->count_all_results() == 0;
    }

    public function checkLogin($username, $password)
    {
      $this->db->select('username');
      $this->db->where('username',$username);
      $this->db->where('pass',$password);
      $this->db->from($this->table_name);

      return $this->db->count_all_results() == 1;
    }

    public function insertData($Userdata)
    {
      return $this->db->insert($this->table_name,$Userdata);
    }
  }
 ?>
