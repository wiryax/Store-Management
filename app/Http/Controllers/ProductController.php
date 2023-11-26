<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends BaseController
{
    public function findAll():View
    {
        $product = DB::table('product')->select('*')->get();
//        dd($product);
        return view('dashboard',['product'=>$product]);
    }
    function delete(String $id){
        $collection = $this->getById($id);
        DB::table('product')->delete($id);
        return $this->findAll();
    }
    private function getById($id){
        $product = DB::table('product')->where('id', $id)->get();
        return $product->firstOrFail();
    }

    function addProduct():View
    {
        return view('AddProductView');
    }
    function insert(){
        $product = [
            'name'=>Request::post()["name"],
            'description'=>Request::post()["description"],
            'stock'=>Request::post()["stock"],
            'price'=>Request::post()["price"]
        ];
        DB::table('product')->insert($product);
        return $this->findAll();
    }
}
