<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelModel;
use App\Models\ClothesModel;

class ProductController extends Controller
{
    public function productDisplay(){
        $products = ClothesModel::all();       
        return view('content.welcome',compact('products'));
    }
    public function productSearch(Request $req){
        if($req->ajax()){
            $inf = $req->get('query');
            if($inf != '') {
                $data = ClothesModel::search($inf);
                if($data !== null){
                    return view('table.searchingResult', compact('data'));
                }
            } else {
                return null;
            }
            
        }
        if($req->ajax()){
            $inf = $req->get('query');
        }
    }
}
