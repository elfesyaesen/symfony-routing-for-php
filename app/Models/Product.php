<?php 
namespace App\Models;

class Product
{
    public function getProduct($id){
       $product = ['title' => 'ilk ürün adı', 'price' => '500.00', 'quantity' => '100'];
       return $product;
    }
}