<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Counter::all();
        return view('location.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'code' => 'string|required',
            'name' => 'string|required',
            'abbr' => 'string|required',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{
            Counter::create([
                'code' => $request->code,
                'name' => $request->name,
                'abbr' => $request->abbr,
            ]);
            return redirect()->route('admin.location.index');
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
        $data = Counter::findOrFail($id);
        return view('location.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $v = Validator::make($request->all(), [
            'code' => 'string|required',
            'name' => 'string|required',
            'abbr' => 'string|required',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{
            Counter::where('id', $id)->update([
                'code' => $request->code,
                'name' => $request->name,
                'abbr' => $request->abbr,
            ]);
            return redirect()->route('admin.location.index');
        }catch(Exception $e){
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Counter::destroy($id);
        return redirect()->route('admin.location.index');
    }
}
