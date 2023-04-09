<?php

namespace App\Http\Controllers;

use App\Patterns\FactoryMethod\Actions\RunLogistic;
use App\Patterns\FactoryMethod\AirLogistic;
use App\Patterns\FactoryMethod\RoadLogistic;

class FactoryMethodController extends Controller
{
    public function index(RunLogistic $runLogistic)
    {

        return view('factory_method', [
            'air' => $runLogistic(app(AirLogistic::class), 'Cookies'),
            'truck' => $runLogistic(app(RoadLogistic::class), 'Tanks'),
        ]);
    }
}
