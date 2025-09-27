<?php

namespace App\Filament\Resources\CustomerProductResource\Pages;

use App\Filament\Resources\CustomerProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerProduct extends CreateRecord
{
    protected static string $resource = CustomerProductResource::class;
}
