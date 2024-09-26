<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;


class Order extends Model
{
    protected $table = 'sql_store.orders';
    use HasFactory;

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class, 'customer_id', 'customer_id');
    }
}
