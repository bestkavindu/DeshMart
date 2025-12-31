<?php

namespace App\Filament\Resources\Reviews\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->sortable()->searchable(),
                ImageColumn::make('user_img')->label('User Image')
                    ->disk('public')
                    ->circular(),
                TextColumn::make('rating')->label('Rating')->sortable()->searchable(),
                TextColumn::make('is_featured')
                    ->badge()
                    ->getStateUsing(fn ($record) => $record->is_featured ? 'Yes' : 'No')
                    ->sortable()
                    ->label('Featured'),
                TextColumn::make('status')
                    ->badge()
                    ->getStateUsing(fn ($record) => $record->status ? 'Active' : 'Inactive')
                    ->sortable()
                    ->label('Active'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
