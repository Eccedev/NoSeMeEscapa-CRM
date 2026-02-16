<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class UpcomingBirthdaysWidget extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                \App\Models\Client::query()
                    ->whereRaw("strftime('%m', birthdate) = ?", [now()->format('m')])
                    ->orderByRaw("strftime('%d', birthdate) ASC")
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Cumpleañero'),
                Tables\Columns\TextColumn::make('birthdate')
                    ->label('Fecha')
                    ->date('d/m'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Teléfono'),
            ]);
    }
}
