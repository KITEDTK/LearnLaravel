<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->productModel = new ProductModel();
    }
    public function productDisplay(){
        $products = $this->productModel->getAllProduct();
        //dd($products);
        return view('content.welcome',compact('products'));
    }
    public function productSearch(Request $req){
        if($req->ajax()){
            $query = $req->get('query');
            if($query != '') {
                $data = $this->productModel->search($query);
            } else {
                $data = null;
            }
            if($data !== null){
                return view('table.searchingResult', compact('data'));
            }
            else{
                return null;
            }
        }
    }
}
