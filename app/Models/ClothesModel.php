<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelModel;

class ClothesModel extends Model
{
    use HasFactory;
    protected $table = 'clothes';
    protected $fillable = ['size','color','quanity','modelId'];
    public function model(){
        return $this->hasOne(ModelModel::class,'id','modelId');
    }
    public static function search($inf)
    {
        return static::join('model', 'model.id', '=', 'clothes.modelId')
        ->where('clothes.id','like',"%$inf%")
        ->orWhere('color','like',"%$inf%")
        ->orWhere('size','like',"%$inf%")
        ->orWhere('model.name','like',"%$inf%")->get();
    }
}
