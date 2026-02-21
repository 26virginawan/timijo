<?php

namespace App\Models;
use App\Models\zona_ob;

use Illuminate\Database\Eloquent\Model;

class List_ob extends Model
{
    protected $fillable = [
        'id',
        'name',
        'keterangan',
        'zona_ob_id',
    ];

    public function zona_ob()
    {
        return $this->belongsTo(zona_ob::class);
    }
}
