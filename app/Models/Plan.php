<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory, HasUlids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'product_id',
        'paddle_plan_id',
        'name',
        'description',
        'price',
        'interval',
        'is_active',
        'credits_per_cycle',
        'features'
    ];

    protected $casts = [
        'features'             => 'array',
        'price'             => 'decimal:2',
        'is_active'         => 'boolean',
        'credits_per_cycle' => 'integer',
    ];

    // Relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
