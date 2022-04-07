<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartDataModel;

class ChartDataController extends Controller
{
    function onAllSelect(){
        return $result = ChartDataModel::all();
    }

    function onCreateChartData(Request $request){
        $x_data   = $request->input('x_data');
        $y_data   = $request->input('y_data');

        $result = ChartDataModel::insert(['x_data'=>$x_data, 'y_data'=>$y_data]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onUpdateChartData(Request $request){
        $id       = $request->input('id');
        $x_data   = $request->input('x_data');
        $y_data   = $request->input('y_data');

        $result = ChartDataModel::where(['id'=>$id])->update(['x_data'=>$x_data, 'y_data'=>$y_data]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onADeleteChartData(Request $request){
        $id       = $request->input('id');

        $result = ChartDataModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }





}
