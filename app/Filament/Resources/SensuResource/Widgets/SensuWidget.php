<?php

namespace App\Filament\Resources\SensuResource\Widgets;

use App\Models\sensu;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SensuWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Person', Sensu::count())->Icon('heroicon-o-user'),
            Stat::make('Purok Fisheries', Sensu::where('address', Sensu::zone4_fisheries)->count())->Icon('heroicon-o-user'),
            Stat::make('Purok Central', Sensu::where('address', Sensu::purok_central)->count())->Icon('heroicon-o-user'),
            Stat::make('Purok Baliwag', Sensu::where('address', Sensu::purok_baliwag)->count())->Icon('heroicon-o-user'),
            Stat::make('Purok Riverside', Sensu::where('address', Sensu::purok_riverside)->count())->Icon('heroicon-o-user'),
           
            
            

        ];
    }
    
    
}
