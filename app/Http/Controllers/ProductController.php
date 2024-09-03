<?php
namespace App\Http\Controllers;
class ProductController{
    public function getAll(){
        return view('products');
    }
    public function show($id,$name){
        // return "show page $id $name";
        return view('showProduct',['productId'=>$id,'productName'=>$name]);
    }
}
?>
