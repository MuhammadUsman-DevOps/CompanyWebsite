<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerProductResource\Pages;
use App\Models\CustomerProduct;
use App\Models\Customer;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CustomerProductResource extends Resource
{
    protected static ?string $model = CustomerProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';
    protected static ?string $navigationGroup = 'Customers';
    protected static ?string $label = 'Customer Product';
    protected static ?string $pluralLabel = 'Customer Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('customer_id')
                    ->label('Customer')
                    ->relationship('customer', 'email')
                    ->searchable()
                    ->required(),

                Forms\Components\Select::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'name')
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),

                Tables\Columns\TextColumn::make('customer.email')
                    ->label('Customer Email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('product.name')
                    ->label('Product')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Later you can add relation managers e.g. subscriptions
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomerProducts::route('/'),
            'create' => Pages\CreateCustomerProduct::route('/create'),
            'edit' => Pages\EditCustomerProduct::route('/{record}/edit'),
        ];
    }
}
