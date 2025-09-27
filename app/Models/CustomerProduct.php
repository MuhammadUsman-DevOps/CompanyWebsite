<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerProduct extends Model
{
    use HasFactory;

    // Explicitly set table name since it's singular
    protected $table = 'customer_product';

    protected $fillable = [
        'customer_id',
        'product_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
