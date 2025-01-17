<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function books() {
        return $this->belongsToMany(Books::class, 'book_categories', 'category_id', 'book_id');
    }
}
