<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartDataModel;

class ChartDataController extends Controller
{
    function onAllSelect(){
        return $result = ChartDataModel::all();
    }

    function createChartData(Request $request){

    }
}
