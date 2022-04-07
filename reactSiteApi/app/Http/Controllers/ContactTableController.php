<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTableModel;
class ContactTableController extends Controller
{
    function onSelectContacts(){
        return $result = ContactTableModel::orderBy('id','desc')->get();
    }

    function onContactSend(Request $request){
        $name       = $request->input('name');
        $email      = $request->input('email');
        $message    = $request->input('message');
        $status     = $request->input('status');
        $result = ContactTableModel::insert(['name'=>$name, 'email'=>$email, 'message'=>$message, 'status'=>0]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


    function onContactDetails(Request $request){
        $id = $request->input('id');
        return $result = ContactTableModel::where(['id'=>$id])->get();
    }

    function onContactDelete(Request $request){
        $id = $request->input('id');
        $result = ContactTableModel::where(['id'=>$id])->delete();
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onContactRead(Request $request){
        $id = $request->input('id');
        $result = ContactTableModel::where(['id'=>$id])->update(['status'=>1]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }

    function onContactUnRead(Request $request){
        $id = $request->input('id');
        $result = ContactTableModel::where(['id'=>$id])->update(['status'=>0]);
        if ($result == true) {
            return 1;
        }else{
            return 0;
        }
    }


}
