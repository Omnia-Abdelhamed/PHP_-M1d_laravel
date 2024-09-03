<?php
namespace App\Http\Controllers;

class TestController{
    public function index(){
        $data=[];
        return view('test',compact('data'));
    }
}
?>
