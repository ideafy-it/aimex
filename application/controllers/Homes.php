<?php
class Homes extends CI_Controller {
    public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('homes/index');
        $this->load->view('templates/_partials/_homes/_FooterBackgroundJs');
	}

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