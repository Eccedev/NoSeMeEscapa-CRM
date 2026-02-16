<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class NextContactsWidget extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                \App\Models\Client::query()
                    ->where('next_contact_at', '>=', now()->startOfDay())
                    ->where('next_contact_at', '<=', now()->addDays(7)->endOfDay())
                    ->orderBy('next_contact_at', 'asc')
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Cliente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Teléfono'),
                Tables\Columns\TextColumn::make('next_contact_at')
                    ->label('Cuándo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('human_detail')
                    ->label('Contexto')
                    ->limit(50),
            ])
            ->actions([
                Tables\Actions\Action::make('contact')
                    ->label('Contactar')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->url(fn($record) => "https://wa.me/" . preg_replace('/[^0-9]/', '', $record->phone), shouldOpenInNewTab: true),
            ]);
    }
}
