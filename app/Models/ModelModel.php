<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelModel extends Model
{
    use HasFactory;
    protected $table = 'model';
    protected $fillable = ['name'];
    public function clothes(){
        return $this->hasMany(ClothesModel::class, 'modelId', 'id');
    }
}
