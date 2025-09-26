<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Models\Subscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationGroup = 'Billing';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('customer_id')
                ->relationship('customer', 'email')
                ->label('Customer (Email)')
                ->required()
                ->searchable()
                ->reactive(),   // 👈 key change

            Forms\Components\Placeholder::make('product_name')
                ->label('Product')
                ->content(function (callable $get) {
                    $customerId = $get('customer_id');

                    if (! $customerId) {
                        return '—';
                    }

                    $customer = \App\Models\Customer::with('product')->find($customerId);

                    return $customer?->product?->name ?? '—';
                }),


            Forms\Components\Select::make('plan_id')
                ->label('Plan')
                ->required()
                ->searchable()
                ->options(function (callable $get) {
                    $customerId = $get('customer_id');

                    if (! $customerId) {
                        return [];
                    }

                    $customer = \App\Models\Customer::find($customerId);

                    if (! $customer) {
                        return [];
                    }

                    return \App\Models\Plan::where('product_id', $customer->product_id)
                        ->where('is_active', true)
                        ->pluck('name', 'id');
                }),

            Forms\Components\TextInput::make('paddle_subscription_id')
                ->label('Paddle Subscription ID')
                ->required(),

            Forms\Components\Select::make('status')
                ->options([
                    'active'    => 'Active',
                    'past_due'  => 'Past Due',
                    'cancelled' => 'Cancelled',
                ])
                ->required(),

            Forms\Components\DateTimePicker::make('valid_until')
                ->label('Valid Until')
                ->nullable(),

            Forms\Components\TextInput::make('credits_remaining')
                ->numeric()
                ->label('Credits Remaining')
                ->default(0),

            Forms\Components\DateTimePicker::make('credits_reset_at')
                ->label('Credits Reset At')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer.email')
                    ->label('Customer Email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('plan.product.name')   // ✅ product name
                ->label('Product')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('plan.name')
                    ->label('Plan')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('paddle_subscription_id')
                    ->label('Paddle ID')
                    ->wrap(),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'success' => 'active',
                        'warning' => 'past_due',
                        'danger'  => 'cancelled',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('valid_until')
                    ->dateTime()
                    ->label('Valid Until'),

                Tables\Columns\TextColumn::make('credits_remaining')
                    ->label('Credits'),

                Tables\Columns\TextColumn::make('credits_reset_at')
                    ->dateTime()
                    ->label('Credits Reset At'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active'    => 'Active',
                        'past_due'  => 'Past Due',
                        'cancelled' => 'Cancelled',
                    ]),
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
            'index'  => Pages\ListSubscriptions::route('/'),
            'create' => Pages\CreateSubscription::route('/create'),
            'edit'   => Pages\EditSubscription::route('/{record}/edit'),
        ];
    }
}
