<?php

namespace App\Filament\Resources\CocktailResource\Pages;

use App\Filament\Resources\CocktailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCocktail extends EditRecord
{
    protected static string $resource = CocktailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
