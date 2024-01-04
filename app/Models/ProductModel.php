<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    use HasFactory;
    protected $table ='clothes';
    protected $id = 'id';
    public function getAllProduct(){
        return DB::table('clothes')
        ->join('model','model.id','=','clothes.modelId')
        ->select('clothes.*','model.name as name')
        ->or
        ->get();
    }
    public function search($query)
    {
        return DB::table('clothes')
            ->join('model', 'model.id', '=', 'clothes.modelId')
            ->where('clothes.id', 'like', "%$query%")
            ->orWhere('model.name', 'like', "%$query%")
            ->orWhere('clothes.color', 'like', "%$query%")
            ->orWhere('clothes.size', 'like', "%$query%")
            ->get();
    }
    
}
