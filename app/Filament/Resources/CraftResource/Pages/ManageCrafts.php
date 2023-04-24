<?php

namespace App\Filament\Resources\CraftResource\Pages;

use App\Filament\Resources\CraftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCrafts extends ManageRecords
{
    protected static string $resource = CraftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
