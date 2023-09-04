<?php


class Mainmodel extends CI_Model {
    public function student_data($std_data) {
      $this->load->database();
      return $this->db->insert('student_table',$std_data);
    }
}
?>