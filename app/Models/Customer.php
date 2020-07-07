<?php

namespace App\Models;
use App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name','address','phone','days'
    ];

    public function room()
    {
        return $this->hasMany(Room::class);
    }
}
