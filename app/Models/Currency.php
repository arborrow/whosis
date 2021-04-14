<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Currency extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'currency';
    protected $fillable = ['country_name', 'currency_name', 'currency_code', 'currency_numeric_code', 'currency_decimals', 'currency_symbol', 'iso_code', 'sort_order'];

}
