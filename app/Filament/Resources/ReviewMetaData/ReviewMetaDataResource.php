<?php

namespace App\Filament\Resources\ReviewMetaData;

use App\Filament\Resources\ReviewMetaData\Pages\CreateReviewMetaData;
use App\Filament\Resources\ReviewMetaData\Pages\EditReviewMetaData;
use App\Filament\Resources\ReviewMetaData\Pages\ListReviewMetaData;
use App\Filament\Resources\ReviewMetaData\Schemas\ReviewMetaDataForm;
use App\Filament\Resources\ReviewMetaData\Tables\ReviewMetaDataTable;
use App\Models\ReviewMetaData;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReviewMetaDataResource extends Resource
{
    protected static ?string $model = ReviewMetaData::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ReviewMetaData';

    public static function form(Schema $schema): Schema
    {
        return ReviewMetaDataForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReviewMetaDataTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReviewMetaData::route('/'),
            'create' => CreateReviewMetaData::route('/create'),
            'edit' => EditReviewMetaData::route('/{record}/edit'),
        ];
    }
}
