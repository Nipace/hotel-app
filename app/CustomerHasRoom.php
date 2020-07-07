<?php

namespace App;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class CustomerHasRoom extends Model
{
    public function customer()
    {
        return $this->belongs(Customer::class);
    }
}
