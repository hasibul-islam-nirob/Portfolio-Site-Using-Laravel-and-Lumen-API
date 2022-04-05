<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterTableModel extends Model
{
    public $table = "footer";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
