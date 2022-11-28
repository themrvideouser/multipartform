<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $dateFormat = "Y-d-m H:i:s.v";
    protected $fillable = [
        'name', 'amount', 'description', 'status', 'stock'
    ];
}
