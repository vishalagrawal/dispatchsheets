<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dispatch_sheets extends CI_Controller {

	public function index()
	{
		// insert models

		$data = array(
			'title'					=>	'Dispatch Sheets',
			'start_date'			=>	date('l, F j Y'),
			'google_analytics_id' 	=>	'XXXXX-X'	
		);

		$this->load->view('dispatch_sheets_list_view', $data);
	}
}

/* End of file dispatch_sheets.php */
/* Location: ./application/controllers/dispatch_sheets.php */