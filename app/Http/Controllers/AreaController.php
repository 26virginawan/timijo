<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $area = Area::all();

        $data = array(
            'tittle' => 'DATA AREA',

        );
        return view('admin.area.index', compact('area'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array(
            'tittle' => 'Data AREA',

        );
        return view('admin.area.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Area::create([
            'name' => $request->name,
        ]);

        return redirect()->route('area.index')
            ->with('success', 'area created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $product)
    {
        return view('admin.area.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $area = Area::findOrFail($id);

        $data = array(
            'tittle' => 'Edit AREA',
        );
        return view('admin.area.edit',compact('area'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $area->update([
            'name' => $request->name,
        ]);

        return redirect()->route('area.index')
            ->with('success', 'Area updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(area $area)
    {
        $area->delete();
        return redirect()->route('area.index')->with('success', 'Product deleted successfully');;
    }
}
