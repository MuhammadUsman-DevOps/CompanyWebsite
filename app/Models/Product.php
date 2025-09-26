<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];
    public $incrementing = false;
    protected $keyType = 'string';

    protected $casts = [
        'features' => 'array',
        'release_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];


    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
