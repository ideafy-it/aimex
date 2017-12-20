<?php
class Main extends CI_Controller {
    // Index View
    public function index($home = 'login')
	{
        $data['title'] = ucfirst($home);

        $this->load->view('templates/header', $data);
        $this->load->view('homes/index', $data);
        $this->load->view('templates/_partials/_homes/_FooterBackgroundJs', $data);
	}

    // Views
    public function view($home = 'index'){
        if(!file_exists(APPPATH.'views/homes/'.$home.'.php')){
            // Shows error if page does not exist
            show_404();
        }

        $data['title'] =  ucfirst($home); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('homes/'.$home, $data);
        $this->load->view('templates/_partials/_homes/_FooterBackgroundJs', $data);
    }
}