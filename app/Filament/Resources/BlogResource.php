<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('product_id')
                ->label('Product')
                ->relationship('product', 'name') // assuming products table has "name"
                ->searchable()
                ->preload()
                ->nullable()
                ->columnSpan(6),
            TextInput::make('title')->required()->maxLength(255)->columnSpan(12),
            TextInput::make('slug')->maxLength(255)->columnSpan(12),
            FileUpload::make('featured_image')->image()->directory('blogs')->columnSpan(12),

            RichEditor::make('content')->required()->columnSpan(12),
            Grid::make(12)->schema([
                TextInput::make('author_name')
                    ->default('Admin')
                    ->columnSpan(3),

                Textarea::make('author_bio')
                    ->columnSpan(3),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ])
                    ->default('draft')
                    ->required()
                    ->columnSpan(3),

                DateTimePicker::make('published_at')
                    ->columnSpan(3),
            ]),

            Section::make('SEO Core')->schema([
                TextInput::make('meta_title')->maxLength(70),
                TextInput::make('meta_description')->maxLength(160),
                TextInput::make('keywords'),
                TextInput::make('canonical_url'),
                TextInput::make('focus_keyword')->maxLength(100),
                Toggle::make('noindex'),
                Toggle::make('nofollow'),
                TextInput::make('redirect_url'),
                TextInput::make('seo_score')->numeric()->minValue(0)->maxValue(100),
            ])->collapsible()->columnSpan(12),

            Section::make('Open Graph')->schema([
                TextInput::make('og_title')->maxLength(90),
                TextInput::make('og_description')->maxLength(200),
                FileUpload::make('og_image')->image()->directory('blogs/og'),
                TextInput::make('og_type')->default('article'),
            ])->collapsible()->columnSpan(12),

            Section::make('Twitter Card')->schema([
                Select::make('twitter_card')->options([
                    'summary' => 'Summary',
                    'summary_large_image' => 'Summary Large Image',
                    'app' => 'App',
                    'player' => 'Player',
                ])->default('summary_large_image'),
                TextInput::make('twitter_title')->maxLength(70),
                TextInput::make('twitter_description')->maxLength(200),
                FileUpload::make('twitter_image')->image()->directory('blogs/twitter'),
            ])->collapsible()->columnSpan(12),

            Section::make('FAQ')->schema([
                Repeater::make('faqs')
                    ->schema([
                        TextInput::make('question')->required(),
                        Textarea::make('answer')->required(),
                    ])
                    ->createItemButtonLabel('Add FAQ')
                    ->collapsible(),
            ])->collapsible()->columnSpan(12),

            Section::make('Schema Markup')->schema([
                Textarea::make('schema_markup'),
            ])->collapsible()->columnSpan(12),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                ImageColumn::make('featured_image')->square(),
                TextColumn::make('author_name')->sortable(),
                TextColumn::make('status')->badge()->sortable(),
                TextColumn::make('published_at')->dateTime()->sortable(),
                IconColumn::make('noindex')->boolean(),
                IconColumn::make('nofollow')->boolean(),
                TextColumn::make('seo_score')->sortable(),
                TextColumn::make('created_at')->since(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
