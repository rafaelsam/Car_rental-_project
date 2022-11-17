<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_id',
        'status'
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
