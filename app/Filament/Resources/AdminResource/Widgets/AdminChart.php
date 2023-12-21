<?php

namespace App\Filament\Resources\AdminResource\Widgets;

use App\Models\Sensu;
use Filament\Widgets\ChartWidget;

class AdminChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'Purok Fisheries' => Sensu::where('address', Sensu::zone4_fisheries)->count(),
            'Purok Central' => Sensu::where('address', Sensu::purok_central)->count(),
            'Purok Baliwag' => Sensu::where('address', Sensu::purok_baliwag)->count(),
            'Purok Riverside' => Sensu::where('address', Sensu::purok_riverside)->count(),
            '15 to 17' => Sensu::where('age', '>=', Sensu::age15)
                ->where('age', '<=', Sensu::age17)
                ->count(),
            '18 to 30' => Sensu::where('age', '>=', Sensu::age18)
                ->where('age', '<=', Sensu::age30)
                ->count(),
            'Male' => Sensu::where('gender', Sensu::male)->count(),
            'Female' => Sensu::where('gender', Sensu::female)->count(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
