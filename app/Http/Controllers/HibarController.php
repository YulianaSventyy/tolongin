<?php

namespace App\Http\Controllers;

use App\Models\Hibar;
use Illuminate\Http\Request;
use Spatie\Backtrace\File;

class HibarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $_hibar = Hibar::all();
        return view ('Hibar.index')->with('Hibar', $_hibar);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $_hibar = Hibar::all();
        return view('Hibar.create', compact('_hibar'));
        //return view('Hibar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$input = $request->all();
        $name = $request->file('Foto')->getClientOriginalName();

        $request->file('Foto')->storeAs('public/fotobarang/', $name);
        $Foto = new Hibar();
        $Foto->name = $name;
        $Foto->save();
        //Hibar::create($input);

        return redirect()->back();
        //return redirect('hibar2')->with('flash_message', 'Hibar Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hibar = Hibar::find($id);
        return view('hibar.show')->with('hibar', $hibar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hibar = Hibar::find($id);
        return view('hibar.edit')->with('hibar', $hibar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hibar = Hibar::find($id);
        $input = $request->all();
        $hibar->update($input);
        return redirect('hibar2')->with('flash_message', 'Hibar Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hibar::destroy($id);
        return redirect('hibar2')->with('flash_message', 'Hibar deleted!');
    }

}
