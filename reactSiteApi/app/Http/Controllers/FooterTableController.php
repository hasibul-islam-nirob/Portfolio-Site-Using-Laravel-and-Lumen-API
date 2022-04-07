<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterTableModel;

class FooterTableController extends Controller
{
    function onAllSelect(){
        return $result = FooterTableModel::all();
    }

    function onDetailsFooter(Request $request){
        $id = $request->input('id');
        return $result = FooterTableModel::where(['id'=>$id])->get();
    }

    function onCreateFooter(Request $request){
        $address    = $request->input('address');
        $email      = $request->input('email');
        $number     = $request->input('number');
        $fb_url     = $request->input('fb_url');
        $li_url     = $request->input('li_url');
        $git_url    = $request->input('git_url');
        $yt_url     = $request->input('yt_url');

        $result = FooterTableModel::insert(['address'=>$address, 'email'=>$email, 'number'=>$number, 'fb_url'=>$fb_url, 'li_url'=>$li_url, 'git_url'=>$git_url, 'yt_url'=>$yt_url]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onUpdateFooter(Request $request){
        $id       = $request->input('id');
        $address    = $request->input('address');
        $email      = $request->input('email');
        $number     = $request->input('number');
        $fb_url     = $request->input('fb_url');
        $li_url     = $request->input('li_url');
        $git_url    = $request->input('git_url');
        $yt_url     = $request->input('yt_url');

        $result = FooterTableModel::where(['id'=>$id])->update(['address'=>$address, 'email'=>$email, 'number'=>$number, 'fb_url'=>$fb_url, 'li_url'=>$li_url, 'git_url'=>$git_url, 'yt_url'=>$yt_url]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onDeleteFooter(Request $request){
        $id       = $request->input('id');

        $result = FooterTableModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }




}
