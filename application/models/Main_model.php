<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

  public function add_invoice( $invoice_details )

  {
    $data1 = array(
      'invoice_number' => $this->input->post('invoice_number'),
      'invoice_prefix' => $this->input->post('invoice_prefix'),
    );
  }

}

/* End of file Main_model.php */
