<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class School extends Model
{
    use HasFactory;
    use SoftDeletes;
    // use \OwenIt\Auditing\Auditable;

    protected $table = 'schools';
    protected $fillable = ['title', 'address', 'city', 'state', 'zipcode', 'area_code','phone', 'principal', 'www_address', 'reporting_gp_scale'];

}
