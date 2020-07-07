<?php

namespace App\Models;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_number','room_type'
    ];

    public function customer()
    {
        return $this->belongs(Customer::class);
    }
}
