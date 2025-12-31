<?php

namespace App\Filament\Resources\ReviewMetaData\Pages;

use App\Filament\Resources\ReviewMetaData\ReviewMetaDataResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReviewMetaData extends EditRecord
{
    protected static string $resource = ReviewMetaDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
