<?php

namespace App\Filament\Resources\SetelanResource\Pages;

use App\Filament\Resources\SetelanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetelans extends ListRecords
{
    protected static string $resource = SetelanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
