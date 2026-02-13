<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Area1Controller extends Controller
{
    public function index(){ 

        $data = array(
            'tittle' => 'Area 1',

        );  
        return view('admin.tugas.area1', $data);
    }
}
