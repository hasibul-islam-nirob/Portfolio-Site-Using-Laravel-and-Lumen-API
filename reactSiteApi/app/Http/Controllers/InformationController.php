<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationModel;

class InformationController extends Controller
{
    function onAllSelect(){
        return $result = InformationModel::all();
    }

    function onDetailsInformation(Request $request){
        $id = $request->input('id');
        return $result = InformationModel::where(['id'=>$id])->get();
    }

    function onCreateInformation(Request $request){
        $about    = $request->input('about');
        $refund   = $request->input('refund');
        $tems     = $request->input('tems');
        $privacy  = $request->input('privacy');

        $result = InformationModel::insert(['about'=>$about, 'refund'=>$refund, 'tems'=>$tems, 'privacy'=>$privacy ]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onUpdateInformation(Request $request){
        $id       = $request->input('id');
        $about    = $request->input('about');
        $refund   = $request->input('refund');
        $tems     = $request->input('tems');
        $privacy  = $request->input('privacy');

        $result = InformationModel::where(['id'=>$id])->update(['about'=>$about, 'refund'=>$refund, 'tems'=>$tems, 'privacy'=>$privacy ]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onDeleteInformation(Request $request){
        $id       = $request->input('id');

        $result = InformationModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    
}
