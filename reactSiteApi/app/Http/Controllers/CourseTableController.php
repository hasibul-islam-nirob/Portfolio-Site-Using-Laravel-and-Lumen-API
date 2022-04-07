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

    function onCreateCourse(Request $request){
        $short_title        = $request->input('short_title');
        $long_title         = $request->input('long_title');
        $short_description  = $request->input('short_description');
        $long_description   = $request->input('long_description');
        $small_image        = $request->input('small_image');
        $total_lectures     = $request->input('total_lectures');
        $total_students     = $request->input('total_students');
        $all_skills         = $request->input('all_skills');
        $video_url          = $request->input('video_url');
        $buy_url            = $request->input('buy_url');

        $result = CourseTableModel::insert(['short_title'=>$short_title, 'long_title'=>$long_title, 'short_description'=>$short_description, 'long_description'=>$long_description, 'small_image'=>$small_image, 'total_lectures'=>$total_lectures, 'total_students'=>$total_students, 'all_skills'=>$all_skills, 'video_url'=>$video_url, 'buy_url'=>$buy_url]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }

    }

    function onCourseUpdate(Request $request){
        $id                 = $request->input('id');
        $short_title        = $request->input('short_title');
        $long_title         = $request->input('long_title');
        $short_description  = $request->input('short_description');
        $long_description   = $request->input('long_description');
        $small_image        = $request->input('small_image');
        $total_lectures     = $request->input('total_lectures');
        $total_students     = $request->input('total_students');
        $all_skills         = $request->input('all_skills');
        $video_url          = $request->input('video_url');
        $buy_url            = $request->input('buy_url');

        $result = CourseTableModel::where(['id'=>$id])->update(['short_title'=>$short_title, 'long_title'=>$long_title, 'short_description'=>$short_description, 'long_description'=>$long_description, 'small_image'=>$small_image, 'total_lectures'=>$total_lectures, 'total_students'=>$total_students, 'all_skills'=>$all_skills, 'video_url'=>$video_url, 'buy_url'=>$buy_url]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }

    }


    function onCourseDelete(Request $request){
        $id = $request->input('id');
        $result = CourseTableModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


}
