<?php

namespace App\Filament\Resources\AdminResource\Widgets;
use App\Models\sensu;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\ChartWidget;

class AdminWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make('Total Person', Sensu::count()),
            Stat::make('Purok Fisheries', Sensu::where('address', Sensu::zone4_fisheries)->count())
            ->description('All are in Fisheries')->descriptionIcon('heroicon-o-user'),
            Stat::make('Purok Central', Sensu::where('address', Sensu::purok_central)->count())
            ->description('All are in Central')->descriptionIcon('heroicon-o-user'),
            Stat::make('Purok Baliwag', Sensu::where('address', Sensu::purok_baliwag)->count())
            ->description('All are in Baliwag')->descriptionIcon('heroicon-o-user'),
            Stat::make('Purok Riverside', Sensu::where('address', Sensu::purok_riverside)->count())
            ->description('All are in Riverside')->descriptionIcon('heroicon-o-user'),
            Stat::make('15 to 17', Sensu::where('age', '>=', Sensu::age15)
            ->where('age', '<=', Sensu::age17) 
            ->count())->description('Age between 15 to 17')->descriptionIcon('heroicon-o-user'),
            Stat::make('18 to 30', Sensu::where('age', '>=', Sensu::age18)
            ->where('age', '<=', Sensu::age30)
            ->count())->description('Age between 18 to 30')->descriptionIcon('heroicon-o-user'),
            Stat::make('Male', Sensu::where('gender', Sensu::male)->count())->Icon('heroicon-o-user'),
            Stat::make('Female', Sensu::where('gender', Sensu::female)->count())->Icon('heroicon-o-user'),

            

        ];
    }

    
}

