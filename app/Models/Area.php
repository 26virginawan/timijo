<?php

namespace App\Models;

use App\Models\ListTugas;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function ListTugas()
    {
        return $this->hasMany(ListTugas::class);
    }

}
