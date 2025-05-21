<?php

namespace App\Filament\Resources\SetelanResource\Pages;

use App\Filament\Resources\SetelanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetelan extends EditRecord
{
    protected static string $resource = SetelanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
