<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceTableModel;

class ServicesTableController extends Controller
{
    function onAllSelect(){
        return $result = ServiceTableModel::all();
    }

    function onDetailsService(Request $request){
        $id = $request->input('id');
        return $result = ServiceTableModel::where(['id'=>$id])->get();
    }

    function onCreateService(Request $request){
        $name         = $request->input('name');
        $description  = $request->input('description');
        $image        = $request->input('image');

        $result = ServiceTableModel::insert(['name'=> $name, 'description'=> $description, 'image'=> $image ]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onUpdateService(Request $request){
        $id                 = $request->input('id');
        $name         = $request->input('name');
        $description  = $request->input('description');
        $image        = $request->input('image');

        $result = ServiceTableModel::where(['id'=>$id])->update(['name'=> $name, 'description'=> $description, 'image'=> $image ]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onDeleteService(Request $request){
        $id       = $request->input('id');

        $result = ServiceTableModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }



}
