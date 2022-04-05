<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChartDataModel extends Model
{
    public $table = "chart_data";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
