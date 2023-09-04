<?php

require APPPATH.'views/razorpay/Razorpay.php';
use Razorpay\Api\Api;

class Main extends CI_Controller
{
    public function index()
    {
        if($this->session->userdata('std_user')){
            $this->load->view('index');
        }else{
            $this->load->view('index');
        }
       
    }
    public function about()
    {
        $this->load->view('about');

    }
    public function kids_academy()
    {
        $this->load->view('kids_academy');
    }
    public function school_tutions()
    {
        $this->load->view('School_tutions');
    }
    public function achievements()
    {
        $this->load->view('Achievements');
    }
    public function contact()
    {
        $this->load->view('Contact');
    }
    public function stdlogin()
    {
        $this->load->view('stdlogin');
    }
    public function stafflogin()
    {
        $this->load->view('stafflogin');
    }


    //admin dashboard// 
    public function admin()
    {
        if ($this->session->userdata('user')) {
            $this->load->view('admin/index');
        } else {
            redirect(base_url('main/admin_login'));
        }

    }
    public function admin_login()
    {
        $this->load->view('admin/login');
    }
    public function Kids_details_upload()
    {
        $this->load->view('admin/kidsupload');
    }
    public function Student_details_upload()
    {
        $this->load->view('admin/studentupload');
    }
    public function Staff_details_upload()
    {
        $this->load->view('admin/staffupload');
    }

    public function kids_details_view()
    {
        $this->load->model('Main_Model');
        $return['data11'] = $this->Main_Model->fetchdata_kids();
        $this->load->view('admin/kidsdetails', $return);
    }
    public function Six_std()
    {
        $this->load->model('Main_Model');
        $return['data'] = $this->Main_Model->fetchdata_6th();
        $return['data1'] = $this->Main_Model->fetchdata_7th();
        $return['data2'] = $this->Main_Model->fetchdata_8th();
        $this->load->view('admin/6th', $return);
    }
    // public function Seven_std(){
    //     $this->load->model('Main_Model');
    //     $return['data1'] = $this->Main_Model->fetchdata_7th();
    //     $this->load->view('admin/7th',$return);
    // }
    // public function Eight_std(){
    //     $this->load->model('Main_Model');
    //     $return['data2'] = $this->Main_Model->fetchdata_8th();
    //     $this->load->view('admin/8th',$return);
    // }
    public function Nine_std()
    {
        $this->load->model('Main_Model');
        $return['data3'] = $this->Main_Model->fetchdata_9th();
        $this->load->view('admin/9th', $return);
    }
    public function Ten_std()
    {
        $this->load->model('Main_Model');
        $return['data4'] = $this->Main_Model->fetchdata_10th();
        $this->load->view('admin/10th', $return);
    }
    public function Eleven_std()
    {
        $this->load->model('Main_Model');
        $return['data5'] = $this->Main_Model->fetchdata_11th();
        $this->load->view('admin/11th', $return);
    }
    public function Twelve_std()
    {
        $this->load->model('Main_Model');
        $return['data6'] = $this->Main_Model->fetchdata_12th();
        $this->load->view('admin/12th', $return);
    }
    public function view_student_details()
    {
       
        $this->load->view('admin/stdprofile');
    }
    public function view_staff_details()
    {
        $this->load->model('Main_Model');
        $return['data8'] = $this->Main_Model->fetchdata_staff();
        $this->load->view('admin/staffdetails', $return);
    }

    // admin validate form
    public function admin_validate()
    {
        extract($_POST);
        $adminid = $this->input->post('adminid');
        $adminpassword = $this->input->post('adminpassword');
        $this->load->model('Main_Model');
        $result = $this->Main_Model->admin_check($adminid, $adminpassword);
        if ($result) {
            $this->session->set_userdata('user', $result);
            redirect(base_url('main/admin'));
        }
    }


    public function std_validate()
    {
        extract($_POST);
        $std_roll = $this->input->post('stdroll');
        $std_dob = $this->input->post('stddob');
        $this->load->model('Main_Model');
        $result = $this->Main_Model->student_check($std_roll, $std_dob);
        if ($result) {
            $this->session->set_userdata('std_user', $result);
            redirect(base_url('main/index'));
        }
    }
    public function student_logout()
    {
        $result = $this->session->unset_userdata('std_user');
        redirect('/');
    }
    //   public function std_id(){
//     $this->load->model('Main_Model');
//     $result ['data']= $this->Main_Model->std_info_id();
//     $this->load->view('index',$result);
//   }  
    public function std_information($id)
    {
        if($this->session->userdata('std_user')){
        $this->load->model('Main_Model');
        $result['data7'] = $this->Main_Model->std_info($id);
        $result['data14']=$this->Main_Model->join_table_std();
        $this->load->view('student_information', $result);
        }
        else{
            redirect('/');
        }
        
    }
    public function std_logout(){
        {
            $result = $this->session->unset_userdata('std_user');
            redirect('/');
        }
    }
    // joining two tables


    public function std_infor()
    {
        $this->load->view('student_information');
    }
    public function std_fees()
    {
        $this->load->view('admin/std_feesupload');
    }
    public function kids_fees() {
        $this->load->view('admin/kids_feesupload');
    }

    public function kids_fees_upload() {
        extract($_POST);
        $data15 = [
            'kid_check_enroll' => $kid_check_enroll,
            'kid_amnt_paid' => $kid_amnt_paid,
            'kid_pending_amnt' => $kid_pending_amnt,
            'kid_fees_status' => $kid_fees_status,
        ];
        $this->load->model('Main_Model');
        $result = $this->Main_Model->kids_fees_data($data15);
        if ($result) {
            redirect(base_url('main/kids_fees'));
        }
        // if else ($result){
            
        // }
         else {
            echo 'Cannot insert!.. Please Try Again..';
        }
        
    }

    public function student_fees_upload()
    {
        extract($_POST);
        $data13 = [
            'std_enroll_check' => $std_enroll_check,
            'std_paid_amnt' => $std_paid_amnt,
            'std_pending_amnt' => $std_pending_amnt,
            'std_amnt_status' => $std_amnt_status,
        ];
        $this->load->model('Main_Model');
        $result = $this->Main_Model->std_fees_data($data13);
        if ($result) {
            redirect(base_url('main/std_fees'));
        }
        // if else ($result){
            
        // }
         else {
            echo 'Cannot insert!.. Please Try Again..';
        }
        
    }
    public function admin_logout()
    {
        $result = $this->session->unset_userdata('user');
        redirect('/');
    }

   

    // kids form insert
    public function kids_form()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['kids_pic']['name'];
        $config = [
            'upload_path' => './upload/kids_upload/',
            'allowed_types' => 'png|jpg|jpeg|gif',
            'file_name' => $file_name,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('kids_pic')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('kidsupload', $error);
        } else {
            $file_data = $this->upload->data('file_name');
            $data10 = [
                'kids_enroll' => $kids_enroll,
                'kids_name' => $kids_name,
                'kids_dob' => $kids_dob,
                'kids_age' => $kids_age,
                'kids_gender' => $kids_gender,
                'kids_parent' => $kids_parent,
                'kids_school' => $kids_school,
                'kids_standard' => $kids_standard,
                'kids_doj' => $kids_doj,
                'kids_mobile' => $kids_mobile,
                'kids_mail' => $kids_mail,
                'kids_address' => $kids_address,
                'kids_pic' => $file_data,
            ];
            $this->load->model('Main_Model');
            $result = $this->Main_Model->kids_data($data10);
            if ($result) {
                redirect(base_url('main/Kids_details_upload'));
            } else {
                echo 'Error In Uploading...';
            }
        }
    }
    // student form insert
    public function student_form()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['std_pic']['name'];
        $config = [
            'upload_path' => './upload/',
            'allowed_types' => 'png|jpg|jpeg|gif',
            'file_name' => $file_name,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('std_pic')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('studentupload', $error);
        } else {
            $file_data = $this->upload->data('file_name');
            $data = [
                'std_enroll' => $std_enroll,
                'std_name' => $std_name,
                'std_dob' => $std_dob,
                'std_age' => $std_age,
                'std_gender' => $std_gender,
                'std_parent' => $std_parent,
                'std_school' => $std_school,
                'std_standard' => $std_standard,
                'std_doj' => $std_doj,
                'std_mobile' => $std_mobile,
                'std_mail' => $std_mail,
                'std_address' => $std_address,
                'std_pic' => $file_data,
            ];
            $this->load->model('Main_Model');
            $result = $this->Main_Model->student_data($data);
            if ($result) {
                redirect(base_url('main/Student_details_upload'));
            } else {
                echo 'not successfull';
            }
        }
    }

    // staff's form insert
    public function staff_form()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['staff_pic']['name'];
        $config = [
            'upload_path' => './upload/staff_upload',
            'allowed_types' => 'png|jpg|jpeg|gif',
            'file_name' => $file_name,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('staff_pic')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/staffupload', $error);
        } else {
            $file_data = $this->upload->data('file_name');
            $data = [
                'staff_id' => $staff_id,
                'staff_fname' => $staff_fname,
                'staff_lname' => $staff_lname,
                'staff_dob' => $staff_dob,
                'staff_age' => $staff_age,
                'staff_gender' => $staff_gender,
                'staff_subject' => $staff_subject,
                'staff_doj' => $staff_doj,
                'staff_number' => $staff_number,
                'staff_email' => $staff_email,
                'staff_address' => $staff_address,
                'staff_pic' => $file_data,
            ];
            $this->load->model('Main_Model');
            $result = $this->Main_Model->staff_data($data);
            if ($result) {
                redirect(base_url('main/Staff_details_upload'));
            } else {
                echo 'not successfull';
            }
        }
    }

    public function kids_data($id)
    {
        $this->load->model('Main_Model');
        $return['data12'] = $this->Main_Model->fetchkid($id);
        $return['data16'] = $this->Main_Model->join_table_kid();
        $this->load->view('admin/kidsprofile', $return);
    }
    public function student_data($id)
    {
        $this->load->model('Main_Model');
        $return['data7'] = $this->Main_Model->fetchstd($id);
        // $this->load->model('Main_Model');
        $return['data14']=$this->Main_Model->join_table_std();
        $this->load->view('admin/stdprofile', $return);

    }

    public function staff_data($id)
    {
        $this->load->model('Main_Model');
        $return['data9'] = $this->Main_Model->fetchstaff($id);
        $this->load->view('admin/staffprofile', $return);
    }



	//********************************payment integration razorpay*************************************//
	public function pay()
	{
        $_SESSION['enroll'] = $this->input->post('enroll');
        $_SESSION['name'] = $this->input->post('name');
		$_SESSION['amount'] = $this->input->post('amount');
		$_SESSION['email']  = $this->input->post('email');
		$_SESSION['number'] = $this->input->post('number');
        $_SESSION['std_standard'] = $this->input->post('std_standard');
        
        $key_id='rzp_test_EZp9OjjSutcozz';
	    $secret='rV6h6TwWlRfXLcMSpRelDOf7'; 
        $api = new Api($key_id, $secret);

		$razorpayOrder = $api->order->create(array(
			'receipt'         => rand(),
			'amount'          => $_SESSION['amount'] * 100, // 2000 rupees in paise
			'currency'        => 'INR',
			'payment_capture' => 1 // auto capture
		));


		$amount = $razorpayOrder['amount'];

		$razorpayOrderId = $razorpayOrder['id'];

		$_SESSION['razorpay_order_id'] = $razorpayOrderId;

		$data = $this->prepareData($amount,$razorpayOrderId);

		$this->load->view('payment_check',array('data' => $data));
	}

	/**
	 * This function verifies the payment,after successful payment
	 */
	public function verify()
	{
		$success = true;
		$error = "payment_failed";
        $key_id='rzp_test_EZp9OjjSutcozz';
	    $secret='rV6h6TwWlRfXLcMSpRelDOf7'; 
  
		if (empty($_POST['razorpay_payment_id']) === false) {
			$api = new Api( $key_id,    $secret);
		try {
				$attributes = array(
					'razorpay_order_id' => $_SESSION['razorpay_order_id'],
					'razorpay_payment_id' => $_POST['razorpay_payment_id'],
					'razorpay_signature' => $_POST['razorpay_signature']
				);
				$api->utility->verifyPaymentSignature($attributes);
              
			}
             catch(SignatureVerificationError $e) {
				$success = false;
				$error = 'Razorpay_Error : ' . $e->getMessage();
			}
		}
		if ($success === true) {
			$this->setRegistrationData();
		}
		else {
			// redirect(base_url().'register/paymentFailed');
            echo "Payment failed";
            // $this->setFailed();
		}
	}

	/**
	 * This function preprares payment parameters
	 * @param $amount
	 * @param $razorpayOrderId
	 * @return array
	 */
	public function prepareData($amount,$razorpayOrderId)
   
	{
        $key_id='rzp_test_EZp9OjjSutcozz';
	    $secret='rV6h6TwWlRfXLcMSpRelDOf7'; 
        $api = new Api($key_id, $secret);
		$data = array(
			"key" => $key_id,
			"amount" => $amount,
			"name" => "Ghurudev Academy",
			"description" => "Learn To Code",
            "image" => base_url('assets/img/cropped-LOGO-01.png'),
			"prefill" => array(
				"name"  => $this->input->post('name'),
				"email"  => $this->input->post('email'),
				"contact" => $this->input->post('number'),
			),
			"notes"  => array(
				"address"  => "Hello World",
				"merchant_order_id" => rand(),
			),
			"theme"  => array(
                "color"  => "#f15b22"
			),
			"order_id" => $razorpayOrderId,
		);
		return $data;
	}

	/**
	 * This function saves your form data to session,
	 * After successfull payment you can save it to database
	 */
	public function setRegistrationData()
	{
        extract($_POST);
        $enroll = $_SESSION['enroll'];		
		$name     =   $_SESSION['name']; 
		$amount   =  $_SESSION['amount']; 
		$email    =  $_SESSION['email']; 
		$mobile   =  $_SESSION['number']; 
        $std_standard = $_SESSION['std_standard'];
       
		$registrationData = array(
			'order_id' => $_SESSION['razorpay_order_id'],
            'payment_id' => $_POST['razorpay_payment_id'],
            'enroll'=> $enroll,
			'name' => $name,
			'amount' => $amount,
			'email' => $email,
			'mobile' => $mobile,
            'std_standard' => $std_standard,
            'status' => 'success',
		);
        // echo "<pre>";
        // print_r($registrationData);
		// save this to database
        $this->load->model('Main_Model');
        $result= $this->Main_Model->pay_check($registrationData);
        if($result){
         redirect('/');
        }
	}
	//****************** END ************************//

//****staff *****/

public function staff_validate(){
    extract($_POST);
    $staff_id = $this->input->post('staff_id');
    $staff_dob = $this->input->post('staff_dob');
    $this->load->model('Main_Model');
    $result = $this->Main_Model->staff_check($staff_id, $staff_dob);
    if ($result) {
        $this->session->set_userdata('staff_user', $result);
        redirect(base_url('main/index'));
    }
}

public function staff_information($id){
    if($this->session->userdata('staff_user')){
        $this->load->model('Main_Model');
        $result['staff_data'] = $this->Main_Model->staff_info($id);
        // echo "<pre>";
        // print_r($result);
        $this->load->view('staff_information', $result);
        }else{
            redirect('/');
        }
}

public function staff_logout(){
    $result = $this->session->unset_userdata('staff_user');
    redirect('/');
}
//****staff end ****/


    //******* Kids ******//

    public function kids_login(){
        $this->load->view('kids_login');
    }

    public function kids_validate(){
        extract($_POST);
        $kids_roll = $this->input->post('kids_roll');
        $kids_dob = $this->input->post('kids_dob');
        $this->load->model('Main_Model');
        $result = $this->Main_Model->kids_check($kids_roll, $kids_dob);
        if ($result) {
            $this->session->set_userdata('kids_user', $result);
            redirect(base_url('main/index'));
        }
    }
    public function kids_logout()
    {
        $result = $this->session->unset_userdata('kids_user');
        redirect('/');
    }
   public function kids_information($id){
    if($this->session->userdata('kids_user')){
    $this->load->model('Main_Model');
    $result['kids_data'] = $this->Main_Model->kids_info($id);
    $result['kids_data1']=$this->Main_Model->join_table_kids();
    // echo "<pre>";
    // print_r($result);
    $this->load->view('kids_information', $result);
    }else{
        redirect('/');
    }
   }





   public function kids_pay()
   {
       $_SESSION['kids_enroll'] = $this->input->post('kids_enroll');
       $_SESSION['kids_name'] = $this->input->post('kids_name');
       $_SESSION['kids_email']  = $this->input->post('kids_email');
       $_SESSION['kids_number'] = $this->input->post('kids_number');
       $_SESSION['kids_standard'] = $this->input->post('kids_standard');
       $_SESSION['amount'] = $this->input->post('amount');

       $key_id='rzp_test_EZp9OjjSutcozz';
       $secret='rV6h6TwWlRfXLcMSpRelDOf7'; 
       $api = new Api($key_id, $secret);

       $razorpayOrder = $api->order->create(array(
           'receipt'         => rand(),
           'amount'          => $_SESSION['amount'] * 100, // 2000 rupees in paise
           'currency'        => 'INR',
           'payment_capture' => 1 // auto capture
       ));


       $amount = $razorpayOrder['amount'];

       $razorpayOrderId = $razorpayOrder['id'];

       $_SESSION['razorpay_order_id'] = $razorpayOrderId;

       $data = $this->kids_prepareData($amount,$razorpayOrderId);

       $this->load->view('kids_payment_check',array('data' => $data));
   }

   /**
    * This function verifies the payment,after successful payment
    */
   public function kids_verify()
   {
       $success = true;
       $error = "payment_failed";
       $key_id='rzp_test_EZp9OjjSutcozz';
       $secret='rV6h6TwWlRfXLcMSpRelDOf7'; 
 
       if (empty($_POST['razorpay_payment_id']) === false) {
           $api = new Api( $key_id,    $secret);
       try {
               $attributes = array(
                   'razorpay_order_id' => $_SESSION['razorpay_order_id'],
                   'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                   'razorpay_signature' => $_POST['razorpay_signature']
               );
               $api->utility->verifyPaymentSignature($attributes);
             
           }
            catch(SignatureVerificationError $e) {
               $success = false;
               $error = 'Razorpay_Error : ' . $e->getMessage();
           }
       }
       if ($success === true) {
           $this->kids_setRegistrationData();
       }
       else {
           // redirect(base_url().'register/paymentFailed');
           echo "Payment failed";
           // $this->setFailed();
       }
   }

   /**
    * This function preprares payment parameters
    * @param $amount
    * @param $razorpayOrderId
    * @return array
    */
   public function kids_prepareData($amount,$razorpayOrderId)
  
   {
       $key_id='rzp_test_EZp9OjjSutcozz';
       $secret='rV6h6TwWlRfXLcMSpRelDOf7'; 
       $api = new Api($key_id, $secret);
       $data = array(
           "key" => $key_id,
           "amount" => $amount,
           "name" => "Ghurudev Academy",
           "description" => "Learn To Code",
           "image" => base_url('assets/img/cropped-LOGO-01.png'),
           "prefill" => array(
               "name"  => $this->input->post('kids_name'),
               "email"  => $this->input->post('kids_email'),
               "contact" => $this->input->post('kids_number'),
           ),
           "notes"  => array(
               "address"  => "Hello World",
               "merchant_order_id" => rand(),
           ),
           "theme"  => array(
               "color"  => "#f15b22"
           ),
           "order_id" => $razorpayOrderId,
       );
       return $data;
   }

   /**
    * This function saves your form data to session,
    * After successfull payment you can save it to database
    */
   public function kids_setRegistrationData()
   {
       extract($_POST);
       $enroll = $_SESSION['kids_enroll'];		
       $name     =   $_SESSION['kids_name']; 
       $amount   =  $_SESSION['amount']; 
       $email    =  $_SESSION['kids_email']; 
       $mobile   =  $_SESSION['kids_number']; 
       $kids_standard = $_SESSION['kids_standard'];
      
       $registrationData = array(
           'order_id' => $_SESSION['razorpay_order_id'],
           'payment_id' => $_POST['razorpay_payment_id'],
           'kids_enroll'=> $enroll,
           'kids_name' => $name,
           'amount' => $amount,
           'kids_email' => $email,
           'kids_mobile' => $mobile,
           'kids_standard' => $kids_standard,
           'status' => 'success',
       );
    //    echo "<pre>";
    //    print_r($registrationData);
       // save this to database
       $this->load->model('Main_Model');
       $result= $this->Main_Model->kids_pay_check($registrationData);
       if($result){
        redirect('/');
       }
   }


    public function kids_edit($id){
        $this->load->model('Main_Model');
       $result['data']=$this->Main_Model->get_edit($id);
    //    echo "<pre>";
    //    print_r($result);
       $this->load->view('admin/kidsupload_edit',$result);	
    }

    public function kids_delete($id){
        $this->load->model('Main_Model');
        if(file_exists('./upload/kids_upload/')){
            unlink('./upload/kids_upload/');
        }
        $result=$this->Main_Model->kids_delete_data($id);
        if($result === true){
            redirect(base_url('main/kids_details_view'));
        }
        }
    public function kids_upload(){
        extract($_POST);
        extract($_FILES);
        if($_FILES['kids_pic']['name']){
            $file_name = $_FILES['kids_pic']['name'];
        $config = [
            'upload_path' => './upload/kids_upload/',
            'allowed_types' => 'png|jpg|jpeg|gif',
            'file_name' => $file_name,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('kids_pic')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('kidsupload', $error);
        } else{
            $file_data = $this->upload->data('file_name');
            $id=$edid;
            $data10 = [
                'kids_enroll' => $kids_enroll,
                'kids_name' => $kids_name,
                'kids_dob' => $kids_dob,
                'kids_age' => $kids_age,
                'kids_gender' => $kids_gender,
                'kids_parent' => $kids_parent,
                'kids_school' => $kids_school,
                'kids_standard' => $kids_standard,
                'kids_doj' => $kids_doj,
                'kids_mobile' => $kids_mobile,
                'kids_mail' => $kids_mail,
                'kids_address' => $kids_address,
                'kids_pic' => $file_data,
            ];
            $this->load->model('Main_Model');
            $result = $this->Main_Model->kids_data_upload($data10,$id);
            if ($result) {
                redirect(base_url('main/kids_details_view'));
            } else {
                echo 'Error In Uploading...';
            }
        }
    }
   
    }

//*******Kids End ********/
//***Student Edit AND Delete *****/

public function student_edit($id){
    $this->load->model('Main_Model');
    $result['data']=$this->Main_Model->student_get_edit($id);
    // echo "<pre>";
    // print_r($result);
    $this->load->view('admin/studentupload_edit',$result);	
}

public function student_update(){

    extract($_POST);
    extract($_FILES);
    if($_FILES['std_pic']['name']){
    $file_name = $_FILES['std_pic']['name'];
    $config = [
        'upload_path' => './upload/',
        'allowed_types' => 'png|jpg|jpeg|gif',
        'file_name' => $file_name,
    ];
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('std_pic')) {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('studentupload', $error);
    } else {
        $file_data = $this->upload->data('file_name');
        $id=$edid;
        $data = [
            'std_enroll' => $std_enroll,
            'std_name' => $std_name,
            'std_dob' => $std_dob,
            'std_age' => $std_age,
            'std_gender' => $std_gender,
            'std_parent' => $std_parent,
            'std_school' => $std_school,
            'std_standard' => $std_standard,
            'std_doj' => $std_doj,
            'std_mobile' => $std_mobile,
            'std_mail' => $std_mail,
            'std_address' => $std_address,
            'std_pic' => $file_data,
        ];
        $this->load->model('Main_Model');
        $result = $this->Main_Model->student_data_upload($data,$id);
        if ($result) {
            redirect(base_url('main/Six_std'));
        } else {
            echo 'not successfull';
        }
    }
    }

}

public function student_delete($id){
    $this->load->model('Main_Model');
    if(file_exists('./upload/')){
        unlink('./upload/');
    }
    $result=$this->Main_Model->student_delete_data($id);
    if($result === true){
        redirect(base_url('main/Six_std'));
    }
}

//********Staff Edit AND Delete ******//
public function staff_edit($id){
    $this->load->model('Main_Model');
    $result['data']=$this->Main_Model->staff_get_edit($id);
    // echo "<pre>";
    // print_r($result);
    $this->load->view('admin/staffupload_edit',$result);	
}
public function staff_update(){
    extract($_POST);
    extract($_FILES);
    if($_FILES['staff_pic']['name']){
    $file_name = $_FILES['staff_pic']['name'];
    $config = [
        'upload_path' => './upload/staff_upload',
        'allowed_types' => 'png|jpg|jpeg|gif',
        'file_name' => $file_name,
    ];
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('staff_pic')) {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/staffupload', $error);
    } else {
        $file_data = $this->upload->data('file_name');
        $id=$edid;
        $data = [
            'staff_id' => $staff_id,
            'staff_fname' => $staff_fname,
            'staff_lname' => $staff_lname,
            'staff_dob' => $staff_dob,
            'staff_age' => $staff_age,
            'staff_gender' => $staff_gender,
            'staff_subject' => $staff_subject,
            'staff_doj' => $staff_doj,
            'staff_number' => $staff_number,
            'staff_email' => $staff_email,
            'staff_address' => $staff_address,
            'staff_pic' => $file_data,
        ];
        $this->load->model('Main_Model');
        $result = $this->Main_Model->staff_data_upload($data,$id);
        if ($result) {
            redirect(base_url('main/view_staff_details'));
        } else {
            echo 'not successfull';
        }
    }
    }
}
public function staff_delete($id){

    $this->load->model('Main_Model');
    if(file_exists('./upload/staff_upload/')){
        unlink('./upload/staff_upload/');
    }
    $result=$this->Main_Model->staff_delete_data($id);
    if($result === true){
        redirect(base_url('main/view_staff_details'));
    }

}

public function kids_payment_details(){
    $this->load->model('Main_Model');
    $return['data'] = $this->Main_Model->kids_pay_fetch();
    // echo "<pre>";
    // print_r($return);
    $this->load->view('admin/kids_payment_details', $return);
}
public function kids_pay_delete($id){
    $this->load->model('Main_Model');
    $result=$this->Main_Model->kids_delete_pay($id);
    if($result === true){
        redirect(base_url('main/kids_payment_details'));
    }
}
public function student_payment_details(){
    $this->load->model('Main_Model');
    $return['data'] = $this->Main_Model->student_pay_fetch();
    // echo "<pre>";
    // print_r($return);
    $this->load->view('admin/student_payment_details', $return);
}
public function student_pay_delete($id){
    $this->load->model('Main_Model');
    $result=$this->Main_Model->student_delete_pay($id);
    if($result === true){
        redirect(base_url('main/student_payment_details'));
}
}
public function payment_page(){
    if($this->session->userdata('kids_user') ){
    $this->load->view('kids_payment_page');
    }else{
        redirect('/');
    }
}

public function std_payment_page(){
    if($this->session->userdata('std_user') ){
        $this->load->view('std_payment_page');
        }else{
            redirect('/');
        }
}

public function staff_attendance(){
    if($this->session->userdata('staff_user')){
        $this->load->view('staff_attendance');
    }
   else{
         redirect('/');
   }
}

public function staff_in($id, $staff_id, $staff_fname,$staff_subject ){

    extract($_POST);

    $data = [
        'id' => $id,
        'staff'=> $staff_id,
        'staff_fname' =>$staff_fname,
        'subject' => $staff_subject ,
        'intime'=> $in_time,
    ];

//     $this->load->model('Main_Model');
//    $return = $this->Main_Model->staff_check_in($data);
   echo "<pre>";
   print_r($data);
}

public function search(){
    $sear=$this->input->get('name'); 
    $this->load->model('Main_Model');
    
    $result['data']=$this->Main_Model->search_table( $sear);
    $this->load->view('search',$result);
}
// public function search_table(){
//    $sear=$this->input->get('search'); 
//    $this->load->model('Main_Model');
//  $result=  $this->Main_Model->searchh( $sear);
//  if($result){
//     $this->load->view('search',$result);
//  }
// }
public function search_box(){
    $this->load->helper('date'); //load date helper
//     $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
//     $time = time();
//     $date = mdate($datestring, $time);
//   print_r($date);
    // $this->load->model('Main_Model');
    // $this->Main_Model->date($date);
  
   echo @date('Y-m-d H:i:s');

}



    
          
   
}

?>