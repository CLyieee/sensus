<?php

namespace App\Filament\Resources\SensuResource\Pages;

use App\Filament\Resources\SensuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSensus extends ListRecords
{
    protected static string $resource = SensuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array 
    {
        return [
            SensuResource\Widgets\SensuWidget::class,
        ];
    } 
}
