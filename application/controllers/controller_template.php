<?php

class Controller_template extends Controller {
    
      function __construct(){
          
            $this-> view-> generate ('view_template','view_aboutus', $data);
            $this-> model = new Model_template();
      
      }
      function action_index() {
          $data = $this->model->get_data();
      }
      
}