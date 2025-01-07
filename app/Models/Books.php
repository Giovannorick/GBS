<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function publishers() {
        return $this->belongsTo(Publishers::class, "publisher_id", "id");
    }
    public function categories() {
        return $this->belongsToMany(Categories::class, 'book_categories', 'book_id', 'category_id');
    }
}
