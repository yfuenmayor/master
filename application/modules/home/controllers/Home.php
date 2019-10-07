<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {


    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data['view'] = 'home_view';
        $this->load->view('layout_view',$data);

    }

}

/* End of file Home.php */
