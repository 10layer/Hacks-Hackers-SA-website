<?php
	/**
	 * Events class
	 * 
	 * @extends Controller
	 */
	class Events extends CI_Controller {

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
			$this->load->view("events");
		}
	}

/* End of file events.php */
/* Location: ./system/application/controllers/ */