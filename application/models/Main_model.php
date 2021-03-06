<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

  public function add_invoice( $invoice_details )

  {
    $data1 = array(
      'invoice_number' => $this->input->post('invoice_number'),
      'invoice_prefix' => $this->input->post('invoice_prefix'),
    );

    $data2 = array(
      'description_l1' => $this->input->post('description_l1'),
      'price_l1' => $this->input->post('price_l1'),
      'qty_l1' => $this->input->post('qty_l1'),
    );

    $data3 = array(
      'description_l2' => $this->input->post('description_l2'),
      'price_l2' => $this->input->post('price_l2'),
      'qty_l2' => $this->input->post('qty_l2'),
    );

    $data4 = array(
      'description_l3' => $this->input->post('description_l3'),
      'price_l3' => $this->input->post('price_l3'),
      'qty_l3' => $this->input->post('qty_l3'),
    );

    $this->db->insert('invoices', $data1);
    $this->db->insert('invoices_lines', $data2, $data3, $data4);

    

  }

}

/* End of file Main_model.php */
