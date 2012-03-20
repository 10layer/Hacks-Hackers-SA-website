<?php
	/**
	 * About class
	 * 
	 * @extends Controller
	 */
	class About extends CI_Controller {

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
			$this->load->view("about");
		}
	}

/* End of file .php */
/* Location: ./system/application/controllers/ */