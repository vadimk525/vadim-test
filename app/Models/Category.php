<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Get children Category
    public function children() {
        return $this -> hasMany(self::class , 'parent_id'); //первый параметр можно записать так - 'app\Catrgory'
    }
}
