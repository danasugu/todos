<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

   public function add_invoice( $invoice_details )

   {
   $this->db->insert('mytable', $invoice_details);
   }

}

/* End of file Main_model.php */
