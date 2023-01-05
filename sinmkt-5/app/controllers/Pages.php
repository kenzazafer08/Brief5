<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        
      ];
      $this->view('pages/index', $data);
    }

    public function contact(){
      $data = [
      ];

      $this->view('pages/contact', $data);
    }
    public function feature(){
      $data = [
      ];

      $this->view('pages/feature', $data);
    }
    public function newarrival(){
      $data = [
      ];

      $this->view('pages/newarrival', $data);
    }
  }