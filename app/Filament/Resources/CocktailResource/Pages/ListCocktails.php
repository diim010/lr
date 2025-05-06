<?php

namespace App\Filament\Resources\CocktailResource\Pages;

use App\Filament\Resources\CocktailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCocktails extends ListRecords
{
    protected static string $resource = CocktailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
