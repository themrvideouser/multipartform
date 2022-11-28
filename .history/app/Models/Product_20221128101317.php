<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $dateFormat = "Y-d-m H:i:s.v";

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $dates = [
        'firstRegistrationDate',
        // 'created_at',
        // 'updated_at'
    ];
    
    protected $fillable = [
        'name', 'amount', 'description', 'status', 'stock'
    ];
}
