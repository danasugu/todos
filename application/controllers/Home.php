<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    // $data['welcome'] = 'welcome';
    // $this->load->view('home', $data);
    $data['main_content'] = 'home';

    $this->load->view('layouts/main', $data);


  }

}

/* End of file Controllername.php */
