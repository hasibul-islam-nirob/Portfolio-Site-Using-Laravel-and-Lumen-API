<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientReviewModel;

class ClientReviewController extends Controller
{
    function onAllSelect(){
        return $result = ClientReviewModel::all();
    }

    function onDetailsReview(Request $request){
        $id  = $request->input('id');
        return $result = ClientReviewModel::where(['id'=>$id])->get();
    }
    
    function onCreateReview(Request $request){
        $name           = $request->input('name');
        $description    = $request->input('description');
        $image          = $request->input('image');

        $result = ClientReviewModel::insert(['name'=>$name, 'description'=>$description, 'image'=>$image]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onUpdateReview(Request $request){
        $id       = $request->input('id');
        $name           = $request->input('name');
        $description    = $request->input('description');
        $image          = $request->input('image');

        $result = ClientReviewModel::where(['id'=>$id])->update(['name'=>$name, 'description'=>$description, 'image'=>$image]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onDeleteReview(Request $request){
        $id       = $request->input('id');

        $result = ClientReviewModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

}
