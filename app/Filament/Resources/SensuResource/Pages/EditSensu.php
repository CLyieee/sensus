<?php

namespace App\Filament\Resources\SensuResource\Pages;

use App\Filament\Resources\SensuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSensu extends EditRecord
{
    protected static string $resource = SensuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
