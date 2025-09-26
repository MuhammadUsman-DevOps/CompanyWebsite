<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, HasUlids;

    /**
     * The primary key is a UUID/ULID and not auto-incrementing.
     */
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Mass-assignable attributes.
     */
    protected $fillable = [
        'product_id',
        'email',
        'name',
        'user_id'
    ];

    /**
     * Relationships
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
