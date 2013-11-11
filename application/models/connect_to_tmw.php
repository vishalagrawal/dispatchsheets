<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connect_to_tmw extends CI_Model 
{
  private $tmw = null;

  // Call the Model constructor
  function __construct() 
  {
    parent::__construct();

    $this->tmw = $this->load->database('tmw', TRUE);
  }
}

/* End of file connect_to_tmw.php */
/* Location: ./application/models/connect_to_tmw.php */