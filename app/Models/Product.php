<?php
class Product extends DB
{
    protected $table = 'products';
    protected $conn;

    public function __construct()
    {
       $this->conn = $this->connect();
    }
    public function getAll(){
        return $this->conn->get($this->table);
    }
    public function getProduct($id){
         $this->conn->where("id", $id);
         $product = $this->conn->getOne ($this->table);
         return $product;
    }
    public function insertProduct( $data)
    {
        return $this->conn->insert($this->table,$data);
    }
    public function deleteProduct($id)
    {
        $this->conn->where('id', $id);
        return $this->conn->delete($this->table);
    }
    public function updateProduct($id,$data=[])
    {
        $this->conn->where('id', $id);
        return $this->conn->update($this->table,$data);
    }
}