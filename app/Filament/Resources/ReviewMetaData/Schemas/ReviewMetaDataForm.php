<?php

namespace App\Filament\Resources\ReviewMetaData\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReviewMetaDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('review_count')
                    ->label('Review Count')
                    ->required()
                    ->numeric(),
                TextInput::make('average_rating')
                    ->label('Average Rating')
                    ->required()
                    ->numeric(),
                TextInput::make('years_experience')
                    ->label('Years Experience')
                    ->required()
                    ->numeric(),
                TextInput::make('repairs_done')
                    ->label('Repairs Done')
                    ->required()
                    ->numeric(),
            ]);
    }
}
