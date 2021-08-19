<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $table = 'tableEmployee';
    protected $primaryKey = 'id_employee';
    
    public function company(){
        return $this->belongsTo('App\Models\Company', 'id_company');
    }

}
