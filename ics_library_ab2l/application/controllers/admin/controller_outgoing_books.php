<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Controller_outgoing_books extends CI_Controller {
 
    function index() {
    	$this->load->model('model_reserved');
		$data['results']= $this->model_reserved->getAllReserved();
        $data['parent'] = "Books";
        $data['current'] = "Outgoing Books";

        $this->load->view("admin/view_header",$data);
        $this->load->view("admin/view_aside");
        $this->load->view("admin/view_outgoing_books",$data);
        $this->load->view("admin/view_footer");
    }
}
/* End of file home_controller.php */
/* Location: ./application/controllers/user/controller_home.php */