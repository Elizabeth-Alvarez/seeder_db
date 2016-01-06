<?php

class User extends CI_Model {

  public function get_users() {
    $query = "SELECT * FROM users";
    return $this->db->query($query)->result_array();
  }

  public function filter_users() {
    $filter_query = "SELECT * FROM users WHERE full_name LIKE '%john%'";
    return $this->db->query($filter_query)->result_array();
  }

}

?>
