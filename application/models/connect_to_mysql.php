<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connect_to_mysql extends CI_Model 
{
  private $mysql = null;

  // Call the Model constructor
  function __construct() 
  {
    parent::__construct();

    $this->mysql = $this->load->database('mysql', TRUE);
  }
}

/* End of file connect_to_mysql.php */
/* Location: ./application/models/connect_to_mysql.php */