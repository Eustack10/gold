<?php

namespace App\Http\Controllers;

use App\Models\Gems;
use App\Models\Lots;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LotsController extends Controller
{
    public function index()
    {
        $data = Lots::with('gems')->get();
        return view('lots.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gems = Gems::all();
        return view('lots.create', compact('gems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'gems_id' => 'integer|required',
            'code' => 'string|required',
            'name' => 'string|required',
            'weight' => 'integer|required',
            'unit' => 'string|required',
            'gram' => 'integer|required',
            'unit_price' => 'string|required',
            'price' => 'string|required',
            'amount' => 'string|required',
            'cert_no' => 'string|required',
            'image' => 'image|required|mimes:jpg,jpeg,png,svg,webp,ico',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{

            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path()."/lot_images/", $image_name);
            Lots::create([
                'gems_id' => $request->gems_id,
                'code' => $request->code,
                'name' => $request->name,
                'weight' => $request->weight,
                'unit' => $request->unit,
                'gram' => $request->gram,
                'unit_price' => $request->unit_price,
                'price' => $request->price,
                'amount' => $request->amount,
                'cert_no' => $request->cert_no,
                'image' => $image_name,
            ]);
            return redirect()->route('admin.lots.index');
        }catch(Exception $e){
            dd($e->getMessage());
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
        $data = Lots::findOrFail($id);
        $gems = Gems::all();
        return view('lots.edit', compact('data', 'gems'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $v = Validator::make($request->all(), [
            'gems_id' => 'string|required',
            'code' => 'string|required',
            'name' => 'string|required',
            'weight' => 'integer|required',
            'unit' => 'string|required',
            'gram' => 'integer|required',
            'unit_price' => 'string|required',
            'price' => 'string|required',
            'amount' => 'string|required',
            'cert_no' => 'string|required',
            'image' => 'image|mimes:jpg,jpeg,png,svg,webp,ico',
        ]);

        if($v->fails()){
            return back()->withErrors($v->errors());
        }
        try{
            $lot = Lots::findOrFail($id);
            if($request->hasFile('image')){
               unlink(public_path()."/lot_images/".$lot->image);
               $image = $request->file('image');
               $image_name = $image->getClientOriginalName();
               $image->move(public_path()."/lot_images/", $image_name);
            }else{
                $image_name = $lot->image;
            }
                $lot->gems_id = $request->gems_id;
                $lot->code = $request->code;
                $lot->name = $request->name;
                $lot->weight = $request->weight;
                $lot->unit = $request->unit;
                $lot->gram = $request->gram;
                $lot->unit_price = $request->unit_price;
                $lot->price = $request->price;
                $lot->amount = $request->amount;
                $lot->cert_no = $request->cert_no;
                $lot->image = $image_name;
                $lot->save();
            return redirect()->route('admin.lots.index');
        }catch(Exception $e){
            dd($e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lot = Lots::findOrFail($id);
        $lot->gems()->detach();
        Lots::destroy($id);
        return redirect()->route('admin.lots.index');
    }
}
