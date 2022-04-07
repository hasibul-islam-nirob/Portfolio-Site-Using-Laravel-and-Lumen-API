<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtcModel;

class VideoController extends Controller
{
    function onSelect(){
        return $result = HomeEtcModel::select('video_description', 'video_url')->get();
    }

}
