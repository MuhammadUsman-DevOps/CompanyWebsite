<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Forms\Components\TextInput::make('tagline')
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('products/thumbnails')
                    ->nullable(),

                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->directory('products/logos')
                    ->nullable(),

                Forms\Components\TextInput::make('demo_url')
                    ->url()
                    ->maxLength(255)
                    ->nullable(),

                Forms\Components\TextInput::make('website_url')
                    ->url()
                    ->maxLength(255)
                    ->nullable(),

                Forms\Components\TextInput::make('platform')
                    ->maxLength(255)
                    ->nullable(),

                Forms\Components\TextInput::make('category')
                    ->maxLength(255)
                    ->nullable(),

                Forms\Components\KeyValue::make('features')
                    ->label('Key Features')
                    ->nullable()
                    ->columnSpanFull(),

                Forms\Components\DatePicker::make('release_date')
                    ->nullable(),

                Forms\Components\TextInput::make('tech_stack')
                    ->maxLength(255)
                    ->nullable(),

                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),

                Forms\Components\Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(false),

                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('category')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('platform')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('release_date')
                    ->date()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
