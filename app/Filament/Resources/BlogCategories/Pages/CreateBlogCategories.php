<?php

namespace App\Filament\Resources\BlogCategories\Pages;

use App\Filament\Resources\BlogCategories\BlogCategoriesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogCategories extends CreateRecord
{
    protected static string $resource = BlogCategoriesResource::class;
}
