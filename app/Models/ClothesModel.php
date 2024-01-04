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
}
