<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensu extends Model
{
    use HasFactory;


    const zone4_fisheries = 'PUROK FISHERIES';
    const purok_central = 'PUROK CENTRAL';
    const purok_baliwag = 'PUROK BALIWAG';
    const purok_riverside = 'PUROK RIVERSIDE';
   
    const age15 = '15';
    const age17 = '17';

    const age18 = '18';
    const age30 = '30';

    const age = [
        self::age15 => '15',
        self::age17 => '17',
        self::age18 => '18',
        self::age30 => '30'
    ];
    
    const male = 'MALE';
    const female = 'FEMALE';

    const gender = [
        self::male   => 'MALE',
        self::female => 'FEMALE'
    ];


    const address = [
        self::zone4_fisheries => 'ZONE 4 FISHERIES',
        self::purok_central => 'PUROK CENTRAL',
        self::purok_baliwag => 'PUROK BALIWAG',
        self::purok_baliwag => 'PUROK RIVERSIDE',
    

    ];
    protected $fillable = [
        'name',
        'age',
        'gender',
        'address',
        'precinct',
    ];
}
