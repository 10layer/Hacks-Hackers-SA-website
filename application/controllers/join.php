<?php
	/**
	 * Join class
	 * 
	 * @extends Controller
	 */
	class Join extends CI_Controller {

		/**
		 * __construct function.
		 * 
		 * @access public
		 * @return void
		 */
		public function __construct() {
			parent::__construct();
		}
		
		public function index() {
			$data=array();
			if (!empty($_POST)) {
				$result=$this->submit();
				if (!empty($result["error"])) {
					$data=$result;
				} else {
					redirect("join/thanks");
				}
			}
			$this->load->view("join", $data);
		}
		
		public function thanks() {
			$this->load->view("thanks");
		}
		
		public function confirm($confirm_otp) {
			$result=$this->db->get_where("members", array("confirm_otp"=>$confirm_otp));
			if ($result->num_rows()>0) {
				$this->db->where("id", $result->row()->id)->update("members", array("confirmed"=>true));
				$this->load->view("confirmed");
			}
		}
		
		protected function submit() {
			$this->load->helper("email");
			$error=false;
			$errors=array();
			$name=$this->input->post("name");
			$email=$this->input->post("email");
			$city=$this->input->post("city");
			$ishack=$this->input->post("isHack");
			$ishacker=$this->input->post("isHacker");
			$twitter=$this->input->post("twitter");
			if (empty($name)) {
				$error=true;
				$errors[]=array("field"=>"name", "msg"=>"We really need your name");
			}
			if (empty($email)) {
				$error=true;
				$errors[]=array("field"=>"email", "msg"=>"How could we get hold of you without an email address?");
			} else if (!valid_email($email)) {
				$error=true;
				$errors[]=array("field"=>"email", "msg"=>"That email address doesn't look quite right");
			} else {
				$result=$this->db->get_where("members", array("email"=>$email));
				if ($result->num_rows()>0) {
					$error=true;
					$errors[]=array("field"=>"email", "msg"=>"It looks like you've already tried to sign up. If you didn't receive your confirmation mail, contact us at <a href='mailto:info@hackshackers.co.za'>info@hackshackers.co.za</a> to get some help.");
				}
			}
			if (empty($city)) {
				$error=true;
				$errors[]=array("field"=>"city", "msg"=>"We need to know where you live, for totally innocent purposes");
			}
			if (!$error) {
				$confirm_otp=md5($email.microtime());
				$dbdata=array(
					"name"=>$name,
					"email"=>$email,
					"city"=>$city,
					"ishack"=>$ishack,
					"ishacker"=>$ishacker,
					"twitter"=>$twitter,
					"confirm_otp"=>$confirm_otp,
					"confirmed"=>false,
				);
				$this->db->insert("members", $dbdata);
				$this->confirm_mail($email, $confirm_otp);
			}
			return array("error"=>$error, "errors"=>$errors);
		}
		
		protected function confirm_mail($email, $confirm_otp) {
			$this->load->library("email");
			$this->email->from('info@hackshackers.co.za', 'Hacks/Hackers');
			$this->email->to($email); 
			$this->email->subject('Confirmation email for Hacks/Hackers membership');
			$this->email->message("Thanks for joining the Hacks/Hackers Revolution!\n To confirm that you really did sign up for Hacks/Hackers South Africa, please go to this link to confirm:\n ".base_url()."join/confirm/$confirm_otp\n If you did not request to join Hacks/Hackers, you can safely ignore this mail.\n You can get hold of the Hacks/Hackers SA team by emailing info@hackshackers.co.za, and don't forget to join the mailing list at http://lists.hackshackers.co.za/listinfo/hackshackers to really get invovled.\n We'll send you notification of any meets, hackathons and other geeky-journo stuff.\n\n The Hacks/Hackers SA Team");	
			$this->email->send();
		}
	}

/* End of file join.php */
/* Location: ./system/application/controllers/ */