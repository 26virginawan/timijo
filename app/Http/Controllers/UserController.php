<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){ 

        $data = array(
            'tittle' => 'Data User',

        );  
        return view('admin.user.index', $data);
    }
}
