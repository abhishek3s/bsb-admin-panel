<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolAffiliation extends Model
{
    use HasFactory;
    protected $connection = 'mysql_web';
    protected $table = 'school_affiliation';
    protected $guarded = [ "school_affiliation_id" ];

}
