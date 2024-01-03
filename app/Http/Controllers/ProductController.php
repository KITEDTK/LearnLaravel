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
            $output = '';
            $query = $req->get('query');
            if($query != '') {
                $data = $this->productModel->search($query);
            } else {
                $data = null;
            }
            //$total_row = $data->count();
            if($data){
                foreach($data as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row->id.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->size.'</td>
                    <td>'.$row->color.'</td>
                    </tr>
                    ';
                }
            } else {
                $output = '
                ';
            }
            $data = array(
                'table_data'  => $output
            );
            echo json_encode($data);
        }
    }
}
