<?php

namespace App\Filament\Resources\ReviewMetaData\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReviewMetaDataTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('review_count')
                    ->label('Review Count')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('average_rating')
                    ->label('Average Rating')
                    ->sortable(),
                TextColumn::make('years_experience')
                    ->label('Years Experience')
                    ->sortable(),
                TextColumn::make('repairs_done')
                    ->label('Repairs Done')
                    ->sortable(),
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
