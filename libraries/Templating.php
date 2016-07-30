<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Templating extends CI_Controller 
 { 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() {
     // making temlate and send data to view.
     $this->template['header']   = $this->load->view('modules/templating/t-header', $this->data, true);   
     $this->template['container']   = $this->load->view('modules/templating/t-container', $this->data, true);   
     $this->template['footer']   = $this->load->view('modules/templating/t-footer', $this->data, true);   

     $this->load->view('layout/index', $this->template);
   }
}
 ?>