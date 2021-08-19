<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tableEmployee extends Model
{
    use HasFactory;
    protected $table = "tableEmployee";
    protected $primaryKey = "id_employee";

    public function company(){
        return $his->belongsTo('App\Model\tableEmployee','id_company');
    }
}

