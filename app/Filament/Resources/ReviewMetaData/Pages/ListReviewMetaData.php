<?php

namespace App\Filament\Resources\ReviewMetaData\Pages;

use App\Filament\Resources\ReviewMetaData\ReviewMetaDataResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReviewMetaData extends ListRecords
{
    protected static string $resource = ReviewMetaDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
