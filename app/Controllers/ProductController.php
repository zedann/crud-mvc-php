<?php

class ProductController
{
    public function index()
    {
        $db =  new Product();
        $products =  $db->getAll();
        $data['products'] = $products;
        View::load('products/prods',$data);
    }

    public function add(){
        View::load('products/add');
    }
    public function store(){
        if(isset($_POST['submit'])){
            $data = Array (
               "name" => $_POST['name'],
               "price" => $_POST['price'],
               "description" => $_POST['description'],
               "qty" => $_POST['qty'],
            );
            $db =  new Product();
            $inserted = $db->insertProduct($data);
            if($inserted){
                $data['success'] = "success" ;
               View::load('products/add',$data); 
            }else 
            {
                $data['success'] = "success" ;
               View::load('products/add',$data); 
            }
            
        }else 
        {
            $data['error'] = "Error!! When Delete This Product Check Ur Database..";

            View::load('errors/error',$data); 
        }
        
    }
    public function delete($id){
        $db =  new Product();
        if($db->deleteProduct($id)){
            $this->index();
        }else{
            $data['error'] = "Error!! When Delete This Product Check Ur Database..";
            View::load('errors/error',$data);
        }
    }
    public function edit($id){
        $db =  new Product();
        $product =  $db->getProduct($id);
        $data['product'] = $product;
        View::load('products/edit',$data);
    }
    public function update($id){
        if(isset($_POST['submit'])){
            $data = Array (
               "name" => $_POST['name'],
               "price" => $_POST['price'],
               "description" => $_POST['description'],
               "qty" => $_POST['qty'],
            );
            $db =  new Product();
            $updated = $db->updateProduct($id,$data);
            


            if($updated){
                $this->index();
            }else 
            {
                $data['error'] = "Product Has not Been Updated" ;
               View::load('products/edit',$data); 
            }
            
        }else 
        {
            $data['error'] = "Error!! When Delete This Product Check Ur Database..";
           View::load('errors/error',$data); 
        }
        
    }


}