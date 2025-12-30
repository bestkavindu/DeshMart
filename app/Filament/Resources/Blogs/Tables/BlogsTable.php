<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('img')->label('Image')
                    ->circular(),
                TextColumn::make('title')->label('Title')->searchable()->sortable(),
                TextColumn::make('created_at')
                    ->isoDate('L'),

                TextColumn::make('content')
                    ->label('Content')
                    ->html()
                    ->formatStateUsing(fn ($state) =>
        Str::limit(strip_tags($state), 100)
            ),
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
