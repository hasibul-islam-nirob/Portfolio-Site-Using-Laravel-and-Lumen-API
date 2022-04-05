<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeEtcModel extends Model
{
    public $table = "home_page_etc";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
