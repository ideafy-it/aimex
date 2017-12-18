<?php
class Clients extends CI_Controller {
    // Views
    public function view($client = 'home'){
        if(!file_exists(APPPATH.'views/clients/'.$client.'.php')){
            // Shows error if page does not exist
            show_404();
        }

        $data['title'] =  ucfirst($client); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('clients/'.$client, $data);
        $this->load->view('templates/footer', $data);
    }
}