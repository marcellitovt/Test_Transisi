<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tableCompanies extends Model
{
    use HasFactory;
    protected $table = "tableCompanies";
    protected $primaryKey = "id_company";
    protected $fillable = [
        'name',
        'logo_path',
        'website',
    ];

}
