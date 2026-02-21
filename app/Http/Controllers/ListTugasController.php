<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\ListTugas;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class ListTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $area = Area::findOrFail($id);
        
        $List = ListTugas::with('area')->findOrFail($id);

        $ListTugas= ListTugas::where('areas_id','=', $id)->get();

        $data = array(
            'tittle' => 'ListTugas',

        );
        // $ListTugas = ListTugas::with('areas')->findOrFail($id);
    
    // Mengirim data ke view
        
        // Mengirim data ke view
        return view('admin.listTugas.index', compact('ListTugas','area'), $data, $area);
    }

    // public function showByCategory($) {
    //     // Mengambil data berdasarkan kategori dan memfilter data yang ada
    //     $ListTugas = ListTugas::where('areas_id', $areas_id)->latest()->get();
        
    //     // Mengirim data ke view
    //     return view('admin.listTugas.index', compact('ListTugas'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $area = Area::all();
        $data = array(
            'tittle' => 'ListTugas',

        );
        return view('admin.ListTugas.create', $data, $area);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
         $area = Area::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'areas_id' => 'required',
        ]);

        ListTugas::create([
            'name' => $request->name,
            'areas_id' => $request->areas_id,
        ]);

        return redirect()->route('area.index', $area)
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
