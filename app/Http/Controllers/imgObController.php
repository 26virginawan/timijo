<?php

namespace App\Http\Controllers;

use App\Models\imgOb;
use Illuminate\Http\Request;

class imgObController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imgOb = imgOb::all();

        $data = array(
            'tittle' => 'DATA ',

        );
        return view('admin.IMGOB.index', compact('imgOb'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array(
            'tittle' => 'Tambah ',

        );
        
        return view('admin.IMGOB.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'image' => 'required',
        ]);

        imgOb::create([
            'image' => 'required|image|mimes:jpeg,png,jpg,',
        ]);

        // if ($request->hasfile('image')) {
        //         $image = $request->file('image');
        //         $imageprestasi =
        //             uniqid(11) . '.' . $image->getClientOriginalExtension();
        //         $image_resize = Image::make($image->getRealPath());
        //         $image_resize->resize(700, 250);
        //         $image_resize->save(
        //             public_path('prestasi\images/' . $imageprestasi)
        //         );
        //     }

        return redirect()->route('imgOb.index')
            ->with('success', 'area created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(imgOb $imgOb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(imgOb $imgOb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, imgOb $imgOb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(imgOb $imgOb)
    {
        //
    }
}
