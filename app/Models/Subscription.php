<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory, HasUlids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'customer_id',
        'plan_id',
        'paddle_subscription_id',
        'status',
        'valid_until',
        'credits_remaining', // optional: track remaining credits
        'credits_reset_at',  // optional: next reset date
    ];

    protected $casts = [
        'valid_until'       => 'datetime',
        'credits_remaining' => 'integer',
        'credits_reset_at'  => 'datetime',
    ];

    // Relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
