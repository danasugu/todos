<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// class Home extends CI_Controller {

//   public function index()
//   {
//     // $data['welcome'] = 'welcome';
//     // $this->load->view('home', $data);
//     $data['main_content'] = 'home';

//     $this->load->view('layouts/main', $data);


//   }

// }

class Home extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model('List_model');
    $this->load->model('Task_model');

    }
    public function index(){
        if($this->session->userdata('logged_in')){
            //Get the logged in users id
            $user_id = $this->session->userdata('user_id');
            //Get all lists from the model
            $data['lists'] = $this->List_model->get_all_lists($user_id);
            $data['tasks'] = $this->Task_model->get_users_tasks($user_id);
        }

        $data['main_content'] = 'home';
        $this->load->view('layouts/main',$data);
    }

}

/* End of file Controllername.php */
