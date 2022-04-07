<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtcModel;

class HomeEtcController extends Controller
{
    function onAllSelect(){
        return $result = HomeEtcModel::all();
    }

    function onDetailsHomeEtc(Request $request){
        $id = $request->input('id');
        return $result = HomeEtcModel::where(['id'=>$id])->get();
    }

    function onCreateHomeEtc(Request $request){
        $brand_logo             = $request->input('brand_logo');
        $top_baner_title        = $request->input('top_baner_title');
        $top_baner_sub_title    = $request->input('top_baner_sub_title');
        $technology_desc        = $request->input('technology_desc');
        $total_projects         = $request->input('total_projects');
        $total_clients          = $request->input('total_clients');
        $video_description      = $request->input('video_description');
        $video_url              = $request->input('video_url');
        $copyright_text         = $request->input('copyright_text');        

        $result = HomeEtcModel::insert(['brand_logo'=> $brand_logo, 'top_baner_title'=> $top_baner_title, 'top_baner_sub_title'=> $top_baner_sub_title, 'technology_desc'=> $technology_desc, 'total_projects'=> $total_projects, 'total_clients'=> $total_clients, 'video_description'=> $video_description, 'video_url'=> $video_url, 'copyright_text'=> $copyright_text]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onUpdateHomeEtc(Request $request){
        $id       = $request->input('id');
        $brand_logo             = $request->input('brand_logo');
        $top_baner_title        = $request->input('top_baner_title');
        $top_baner_sub_title    = $request->input('top_baner_sub_title');
        $technology_desc        = $request->input('technology_desc');
        $total_projects         = $request->input('total_projects');
        $total_clients          = $request->input('total_clients');
        $video_description      = $request->input('video_description');
        $video_url              = $request->input('video_url');
        $copyright_text         = $request->input('copyright_text');  

        $result = HomeEtcModel::where(['id'=>$id])->update(['brand_logo'=> $brand_logo, 'top_baner_title'=> $top_baner_title, 'top_baner_sub_title'=> $top_baner_sub_title, 'technology_desc'=> $technology_desc, 'total_projects'=> $total_projects, 'total_clients'=> $total_clients, 'video_description'=> $video_description, 'video_url'=> $video_url, 'copyright_text'=> $copyright_text]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onDeleteHomeEtc(Request $request){
        $id       = $request->input('id');

        $result = HomeEtcModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onSelectTechDescription(){
        return $result = HomeEtcModel::select('technology_desc')->get();
    }

    function onSelectTotalClientProject(){
        return $result = HomeEtcModel::select('total_projects', 'total_clients')->get();
    }

    function onSelectHomeTopTitleSubTitle(){
        return $result = HomeEtcModel::select('top_baner_title', 'top_baner_sub_title')->get();
    }

    function onSelectBrandImage(){
        return $result = HomeEtcModel::select('brand_logo')->get();
    }


}
