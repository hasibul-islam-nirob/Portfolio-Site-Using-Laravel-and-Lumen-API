<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTableModel;

class CourseTableController extends Controller
{
    function onSelectFour(){
        return $resulr = CourseTableModel::orderBy('id','desc')->limit(4)->get();
    }

    function onSelectAll(){
        return $resulr = CourseTableModel::all();
    }

    function onSelectDetails(Request $request){
        
        $id = $request->input('id');
        return $result = CourseTableModel::where(['id'=>$id])->get();
    }


}
