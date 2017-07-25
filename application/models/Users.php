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
      $this->db->select('username,pass');
      $this->db->where('username',$username);
      $this->db->from($this->table_name);

      if($this->db->count_all_results() != 1)
        {return false;}
      else {
        $query = $this->db->get();
        $row = $query->row();

        if(password_verify($password,$row->pass))
          return true;
        else {
          return false;
        }
      }

    }

    public function insertData($Userdata)
    {
      return $this->db->insert($this->table_name,$Userdata);
    }
  }
 ?>
