<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'full_name',
        'email',
        'country',
        'address',
        'city',
        'phone',
        'password'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}

