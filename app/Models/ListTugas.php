<?php

namespace App\Models;

use App\Models\Area;
use Illuminate\Database\Eloquent\Model;

class ListTugas extends Model
{
    protected $fillable = [
        'id',
        'name',
        'areas_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
