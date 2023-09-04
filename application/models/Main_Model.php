<?php

class Main_Model extends CI_Model {
    public function admin_check($adminid,$adminpassword) {
      $this->load->database();
      $result = $this->db->get_where('admin_table',array(   'adminid'=>$adminid,'adminpassword'=>$adminpassword));
      return $result->row_array();
    }
    public function student_check($std_id,$std_dob){
      $this->load->database();
      $result = $this->db->get_where('student_table',array('std_enroll'=>$std_id,'std_dob'=>$std_dob));
      return $result->row_array();
    }
    public function kids_check($kids_roll,$kids_dob){
      $this->load->database();
      $result = $this->db->get_where('kids_table',array('kids_enroll'=>$kids_roll,'kids_dob'=>$kids_dob));
      return $result->row_array();
    }
    public function staff_check($staff_id,$staff_dob){
      $this->load->database();
      $result = $this->db->get_where('staff_table',array('staff_id'=>$staff_id,'staff_dob'=>$staff_dob));
      return $result->row_array();
    }
    public function staff_info($id){
      $this->load->database();
      $this->db->Where('id',$id);
      return $this->db->get('staff_table')->result();

    }
    public function std_fees_data($data13) {
      $this->load->database();
      return $this->db->insert('student_fees_table',$data13);
    }
    public function kids_fees_data($data15) {
      $this->load->database();
      return $this->db->insert('kids_fees_table',$data15);
    }
    public function kids_info($id){
      $this->load->database();
      $this->db->Where('id',$id);
      return $this->db->get('kids_table')->result();
    }
    public function join_table_kids(){
      $this->db->select('kid_amnt_paid,kid_pending_amnt,kid_fees_status');
      $this->db->from('user_cart');
      $this->db->join('kids_table', 'kids_fees_table.kid_check_enroll = kids_table.kids_enroll');
      return  $this->db->get()->result(); 
    }

    
    public function join_table_kid(){
      $this->db->select('kid_amnt_paid,kid_pending_amnt,kid_fees_status');
      $this->db->from('kids_fees_table');
      $this->db->join('kids_table', 'kids_fees_table.kid_check_enroll = kids_table.kids_enroll');
      return  $this->db->get()->result(); 
    }

    public function join_table_std(){
      $this->db->select('std_paid_amnt,std_pending_amnt,std_amnt_status');
      $this->db->from('student_fees_table');
      $this->db->join('student_table', 'student_fees_table.std_enroll_check = student_table.std_enroll');
      return  $this->db->get()->result(); 
    }
    public function kids_data($data10) {
      $this->load->database();
      return $this->db->insert('kids_table',$data10);
    }
    public function student_data($data) {
      $this->load->database();
      return $this->db->insert('student_table',$data);
    }
    public function staff_data($data) {
      $this->load->database();
      return $this->db->insert('staff_table',$data);
    }
    public function fetchdata_kids(){
      $this->load->database();
      return $this->db->get('kids_table')->result();
    }
    public function std_info_id(){
       $this->load->database();
      // $this->db->Where('id');
      return $this->db->get('student_table')->result();
    }
    public function std_info($id){
      $this->load->database();
      $this->db->Where('id',$id);
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_6th(){
      $this->load->database();
      $this->db->Where('std_standard','6th standard');
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_7th(){
      $this->load->database();
      $this->db->Where('std_standard','7th standard');
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_8th(){
      $this->load->database();
      $this->db->Where('std_standard','8th standard');
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_9th(){
      $this->load->database();
      $this->db->Where('std_standard','9th standard');
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_10th(){
      $this->load->database();
      $this->db->Where('std_standard','10th standard');
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_11th(){
      $this->load->database();
      $this->db->Where('std_standard','11th standard');
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_12th(){
      $this->load->database();
      $this->db->Where('std_standard','12th standard');
      return $this->db->get('student_table')->result();
    }
    public function fetchdata_staff(){
      $this->load->database();
      return $this->db->get('staff_table')->result();
    }
    public function fetchkid($id) {
      $this->load->database();
      $this->db->Where('id',$id);
      return $this->db->get('kids_table')->result();
    }
    public function fetchstd($id) {
      $this->load->database();
      $this->db->Where('id',$id);
      return $this->db->get('student_table')->result();
    }

    public function fetchstaff($id) {
      $this->load->database();
      $this->db->Where('id',$id);
      return $this->db->get('staff_table')->result();
    }
    public function pay_check($registrationData){
        $this->load->database();
      return  $this->db->insert('student_payment',$registrationData);
    }
    public function kids_pay_check($registrationData){
      $this->load->database();
      return  $this->db->insert('kids_payment',$registrationData);
    }

//***Kids edit and delete ****/


public function get_edit($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->get('kids_table')->result();
}
public function kids_data_upload($data10,$id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->update('kids_table',$data10);
}
public function kids_delete_data($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->delete('kids_table');
}

//***Student edit and delete *****/
public function student_get_edit($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->get('student_table')->result();
}
public function student_data_upload($data,$id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->update('student_table',$data);
}
public function student_delete_data($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->delete('student_table');
}
//******Staff******/
public function staff_get_edit($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->get('staff_table')->result();
}
public function staff_data_upload($data,$id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->update('staff_table',$data);
}
public function staff_delete_data($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->delete('staff_table');
}
public function kids_pay_fetch(){
  $this->load->database();
  return $this->db->get('kids_payment')->result();
}



public function kids_delete_pay($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->delete('kids_payment');
}
public function student_pay_fetch(){
  $this->load->database();
  return $this->db->get('student_payment')->result();
}
public function student_delete_pay($id){
  $this->load->database();
  $this->db->where('id',$id);
  return $this->db->delete('student_payment');
}
public function staff_check_in($data){
  $this->load->database();
 return  $this->db->insert('staff_in_time',$data);
}

public function search_table($sear){
  $this->load->database();
  // $this->db->select("*");  
  // $this->db->like('name', $sear);
  // $this->db->like('name', $sear); 
  // $query = $this->db->get("search"); 
  // return $query->result();
  // $this->load->database();
  return $this->db->get('search')->result();
}

public function searchh($sear){
  $this->load->database();
  $this->db->select("*");  
  $this->db->like('name',$sear);
  $query = $this->db->get("search"); 
  return $query->result();
}


}
?>