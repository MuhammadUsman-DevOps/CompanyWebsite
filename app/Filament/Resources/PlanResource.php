<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Billing';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('product_id')
                ->relationship('product', 'name')
                ->required()
                ->searchable(),

            Forms\Components\TextInput::make('paddle_plan_id')
                ->label('Paddle Plan ID')
                ->required(),

            Forms\Components\TextInput::make('name')
                ->required(),
            Forms\Components\TextInput::make('price')
                ->numeric()
                ->prefix('$')
                ->required(),
            Forms\Components\Select::make('interval')
                ->options([
                    'onetime' => 'One-time',
                    'monthly' => 'Monthly',
                    'yearly'  => 'Yearly',
                ])
                ->required(),
            Forms\Components\TextInput::make('credits_per_cycle')
                ->numeric()
                ->label('Credits per cycle')
                ->default(0),

            Forms\Components\Textarea::make('description')
                ->rows(3)
                ->columnSpan('full')
                ->nullable(),


            // ✅ Features as a list of strings stored in the JSON column
            Forms\Components\Repeater::make('features')
                ->label('Features')
                ->columnSpan('full')
                ->schema([
                    Forms\Components\TextInput::make('value')   // 👈 give it a key
                    ->label('Feature')
                        ->required(),
                ])
                ->default([])
                ->createItemButtonLabel('Add feature'),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')
                    ->label('Product')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('usd')
                    ->sortable(),
                Tables\Columns\TextColumn::make('interval')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('credits_per_cycle'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit'   => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}
