<?php

namespace App\Models;
use App\Models\list_ob;
use Illuminate\Database\Eloquent\Model;

class zona_ob extends Model
{
    protected $fillable = [
        'id',
        'name',
        'shift',
    ];

    public function list_ob()
    {
        return $this->hasMany(list_ob::class);
    }
}
