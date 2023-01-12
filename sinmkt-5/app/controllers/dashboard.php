<?php 
class Dashboard extends Controller{
    public function __construct()
    {
        if(!isLoggedIn()){
            redirect('pages');
        }
        $this->dashboardModel = $this->model('product');
    }
    public function index()
    {
        $products = $this->dashboardModel->getProducts();
        $data=[
            'products' => $products
        ];
        $this->view('admin/dashbord',$data);
    }
    public function addproduct(){
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //process form
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                // process form
                $data = [
                    'name' => trim($_POST['name']),
                    'Image' => trim($_POST['Image']),
                    'price' => trim($_POST['price']),
                    'desc' => trim($_POST['desc']),
                    'id_cat' => trim($_POST['id_cat'])  ,
                    'name_err' => '',
                    'Image_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'id_cat_err' => ''
                ];
    
                //Validate username
                if (empty($data['name'])) {
                    $data['name_err'] = 'Name must be filled';
                }
                if (!$data['Image']) {
                    $data['Image_err'] = 'Image must be filled';
                }
                
                if (!$data['price']) {
                    $data['price_err'] = 'Price must be filled';
                }
                
                if (empty($data['desc'])) {
                    $data['description_err'] = 'Description must be filled';
                }
                if ($data['id_cat'] == 0) {
                    $data['id_cat_err'] = 'Category must be selected';
                }
    
                
    
                if (empty($data['name_err']) && empty($data['image_err']) && empty($data['description_err'] && empty($data['id_cat_err']))) {
                    if($this->dashboardModel->addProduct($data)){
                        redirect("dashboard/index");
                    }else{
                        die('somthing went wrong');
                    }
                    
                } else {
                    // Load view with errors 
                   $this->view('admin/addproduct', $data);
                }
            } else {
                $categories = $this->dashboardModel->getCategories();
    
                //init data 
                $data = [
                    'name' => '',
                    'image' => '',
                    'price' => '',
                    'description' => '',
                    'id_cat' => '' ,
                    'name_err' => '',
                    'Image_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'id_cat_err' => '',
                    'categories' => $categories
    
                ];
                //load form
                $this->view('admin/addproduct', $data);
            }
          
      }
      public function delete($id)
    {
        if($this->dashboardModel->delete($id)){
            redirect('dashboard');
        }else{
            die("somthing went wrong");
        }
    }
    public function edit($id)
    {// Check the request method
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //process form
            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'image' => trim($_POST['image']),
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description']),
                'id_cat' => trim($_POST['id_cat'])  ,
                'name_err' => '',
                'image_err' => '',
                'price_err' => '',
                'description_err' => '',
                'id_cat_err' => ''
            ];

            //Validate username
            if (empty($data['name'])) {
                $data['name_err'] = 'Name must be filled';
            }
            if (!$data['image']) {
                $data['image_err'] = 'Image must be filled';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Description must be filled';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Price must be filled';
            }
            if ($data['id_cat'] == 0) {
                $data['id_cat_err'] = 'Category must be selected';
            }
            if (empty($data['name_err']) && empty($data['image_err']) && empty($data['description_err'] && empty($data['id_cat_err']))) {
                if($this->dashboardModel->edit($data)){
                    redirect("dashboard");
                }else{
                    die('somthing went wrong');
                }
                
            } else {
                // Load view with errors 
               $this->view('admin/edit', $data);
            }
        } else {
            $categories = $this->dashboardModel->getCategories();
            $product = $this->dashboardModel->getSingleProduct($id);

            //init data 
            $data = [
                'id' => $product->id_prod,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'description' => $product->description,
                'id_cat' => $product->id_cat ,
                'name_err' => '',
                'image_err' => '',
                'price_err' => '',
                'description_err' => '',
                'id_cat_err' => '',
                'categories' => $categories

            ];
            //load form
            $this->view('admin/edit', $data);
        }
    }
}