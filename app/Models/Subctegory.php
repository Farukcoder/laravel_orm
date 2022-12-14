<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Subctegory extends Model
{
    use HasFactory;

    protected $table = 'subcategoris';

    protected $fillable = [
        'category_id','name',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

}
