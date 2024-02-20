<?php

namespace App\Http\Controllers;

use App\Models\Goldsmith;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GoldSmithController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Goldsmith::all();
        return view('goldsmith.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('goldsmith.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'code' => 'string|required',
            'name' => 'string|required',
            'phone' => 'string|required',
            'address1' => 'string|required',
            'address2' => 'string|required',
            'remark' => 'string|required',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{
            Goldsmith::create([
                'code' => $request->code,
                'name' => $request->name,
                'phone' => $request->phone,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'remark' => $request->remark,
            ]);
            return redirect()->route('admin.goldsmith.index');
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
        $data = Goldsmith::findOrFail($id);
        return view('goldsmith.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $v = Validator::make($request->all(), [
            'code' => 'string|required',
            'name' => 'string|required',
            'phone' => 'string|required',
            'address1' => 'string|required',
            'address2' => 'string|required',
            'remark' => 'string|required',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{
            Goldsmith::where('id', $id)->update([
                'code' => $request->code,
                'name' => $request->name,
                'phone' => $request->phone,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'remark' => $request->remark,
            ]);
            return redirect()->route('admin.goldsmith.index');
        }catch(Exception $e){
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Goldsmith::destroy($id);
        return redirect()->route('admin.goldsmith.index');
    }
}
