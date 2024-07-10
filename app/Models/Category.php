<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory; //этот класс нужен для тестирования и пока не нужен
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    //строка ниже добавлена автоматически, я ее не добавлял
    // use HasFactory; //этот класс нужен для тестирования и пока не нужен

    //Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];

    //Mutators
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }


    //Get children Category
    public function children() {
        return $this->hasMany(self::class , 'parent_id'); //первый параметр можно записать так - 'app\Catrgory'
    }
}
