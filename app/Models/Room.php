<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class Room extends Model
{
    use HasFactory;
    use SoftDeletes;
    // use \OwenIt\Auditing\Auditable;

    protected $table = 'rooms';
    protected $primaryKey = 'room_id';
    protected $fillable = ['title', 'description', 'school_id', 'capacity', 'sort_order'];

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }


}
