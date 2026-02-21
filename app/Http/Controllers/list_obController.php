<?php

namespace App\Http\Controllers;

use App\Models\list_ob;
use App\Models\zona_ob;
use Illuminate\Http\Request;

class list_obController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $zona = zona_ob::findOrFail($id);
        
        $List = list_ob::with('zona_ob')->findOrFail($id);

        $list_ob= list_ob::where('zona_ob_id','=', $id)->get();

        $data = array(
            'tittle' => 'List OB',

        );
        
        // Mengirim data ke view
        return view('admin.OB.LIST.index', compact('list_ob','zona'), $data, $zona);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(list_ob $list_ob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(list_ob $list_ob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, list_ob $list_ob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(list_ob $list_ob)
    {
        //
    }
}
