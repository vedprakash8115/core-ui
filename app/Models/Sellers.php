<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    use HasFactory;
    protected $fillable = ['shop_name', 'address', 'contact_person', 'contact_number', 'shop_code'];
}
