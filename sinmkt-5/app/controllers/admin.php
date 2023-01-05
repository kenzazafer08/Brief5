<?php
class admin extends Controller{
    public function index(){
        $data = [
          
        ];
        $this->view('admin/login', $data);
      }
      public function dashbord(){
        $data = [
          
        ];
        $this->view('admin/dashbord', $data);
      }
}