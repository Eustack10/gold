<?php

namespace App\Http\Controllers;

use App\Models\Gems;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gems::all();
        return view('gem.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'code' => 'string|required',
            'name' => 'string|required',
            'unit' => 'string|required',
            'unit_price' => 'string|required',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{
            Gems::create([
                'code' => $request->code,
                'name' => $request->name,
                'unit' => $request->unit,
                'unit_price' => $request->unit_price,
            ]);
            return redirect()->route('admin.gem.index');
        }catch(Exception $e){
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Gems::findOrFail($id);
        return view('gem.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $v = Validator::make($request->all(), [
            'code' => 'string|required',
            'name' => 'string|required',
            'unit' => 'string|required',
            'unit_price' => 'string|required',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{
            Gems::where('id', $id)->update([
                'code' => $request->code,
                'name' => $request->name,
                'unit' => $request->unit,
                'unit_price' => $request->unit_price,
            ]);
            return redirect()->route('admin.gem.index');
        }catch(Exception $e){
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gems::destroy($id);
        return redirect()->route('admin.gem.index');
    }
}
