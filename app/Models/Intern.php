<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;
    protected $fillable = [
        'role',
        'company_name',
        'description',
        'company_address',
        'url_information',
        'internship_period',
        'requirement',
    ];
}
