<?php
class Admins extends CI_Controller {
    // Views
    public function view($admin = 'home'){
        if(!file_exists(APPPATH.'views/admins/'.$admin.'.php')){
            // Shows error if page does not exist
            show_404();
        }

        $data['title'] =  ucfirst($admin); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('admins/'.$admin, $data);
        $this->load->view('templates/footer', $data);
    }
}