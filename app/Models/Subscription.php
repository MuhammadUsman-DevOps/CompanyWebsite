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

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (self $subscription) {
            if (! $subscription->customer_product_id && $subscription->plan_id && $subscription->customer_id) {
                $plan = Plan::find($subscription->plan_id);

                if ($plan) {
                    $customerProduct = CustomerProduct::firstOrCreate([
                        'customer_id' => $subscription->customer_id,
                        'product_id'  => $plan->product_id,
                    ]);

                    $subscription->customer_product_id = $customerProduct->id;
                }
            }
        });
    }

    protected $fillable = [
        'customer_product_id',
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
    public function customerProduct()
    {
        return $this->belongsTo(CustomerProduct::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
