<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'short_name', 'code'];


    // public function product()
    // {
    //     return $this->belongsTo(product::class);
    // }
}
