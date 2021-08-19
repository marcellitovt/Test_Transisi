<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'tableCompanies';
    protected $primaryKey = 'id_company';
    protected $fillable = [
        'name',
        'email',
        'logo_path',
        'website'
    ];
}
