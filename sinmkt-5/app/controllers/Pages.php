<?php
  class Pages extends Controller {
    public function __construct()
    {
        $this->productModel = $this->model('product');
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
      $products = $this->productModel->getProducts();
        $data=[
            'products' => $products
        ];
      $this->view('pages/feature', $data);
    }
    public function newarrival(){
      $products = $this->productModel->getProducts();
        $data=[
            'products' => $products
        ];

      $this->view('pages/newarrival', $data);
    }
  }