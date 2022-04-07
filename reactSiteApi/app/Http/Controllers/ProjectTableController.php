<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectTableModel;

class ProjectTableController extends Controller
{
    function onAllSelect(){
        return $result = ProjectTableModel::all();
    }

    function onDetailsProject(Request $request){
        $id = $request->input('id');
        return $result = ProjectTableModel::where(['id'=>$id])->get();
    }

    function onCreateProject(Request $request){
        $image_one          = $request->input('image_one');
        $image_two          = $request->input('image_two');
        $name               = $request->input('name');
        $short_description  = $request->input('short_description');
        $long_description   = $request->input('long_description');
        $preview_url        = $request->input('preview_url');

        $result = ProjectTableModel::insert(['image_one'=> $image_one, 'image_two'=> $image_two, 'name'=> $name, 'short_description'=> $short_description, 'long_description'=> $long_description, 'preview_url'=> $preview_url]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onUpdateProject(Request $request){
        $id                 = $request->input('id');
        $image_one          = $request->input('image_one');
        $image_two          = $request->input('image_two');
        $name               = $request->input('name');
        $short_description  = $request->input('short_description');
        $long_description   = $request->input('long_description');
        $preview_url        = $request->input('preview_url');

        $result = ProjectTableModel::where(['id'=>$id])->update(['image_one'=> $image_one, 'image_two'=> $image_two, 'name'=> $name, 'short_description'=> $short_description, 'long_description'=> $long_description, 'preview_url'=> $preview_url]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onDeleteProject(Request $request){
        $id       = $request->input('id');

        $result = ProjectTableModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    
}
