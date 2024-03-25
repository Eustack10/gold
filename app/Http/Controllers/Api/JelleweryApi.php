<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gems;
use App\Models\Jellewery;
use App\Models\Lots;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class JelleweryApi extends Controller
{
    public function getLotsByGemId($id)
    {
        $gems = Gems::findOrFail($id);
        return $gems->lots;
    }
    function getLots(){
        $data = Jellewery::with('lots')->get();
        return response()->json($data, 200);
    }
    function setLots(Request $request){
        $v = Validator::make($request->all(), [
            'gems_id' => 'required',
            'pcs' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ]);
        if($v->fails()){
            return false;
        }
        $j = Jellewery::create([
            'gems_id' => $request->gems_id,
            'pcs' => $request->pcs,
            'weight' => $request->weight,
            'price' => $request->price,
            'amount' => $request->amount,
        ]);
        $j->lots()->attach($request->lots);
        $data = Jellewery::with('lots')->get();
        return response()->json($data, 200);
    }
    function updateLots(Request $request){
        $v = Validator::make($request->all(), [
            'gems_id' => 'required',
            'pcs' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'id' => 'required',
        ]);
        if($v->fails()){
            return false;
        }
        Jellewery::where('id', $request->id)->update([
            'gems_id' => $request->gems_id,
            'pcs' => $request->pcs,
            'weight' => $request->weight,
            'price' => $request->price,
            'amount' => $request->amount,
        ]);
        $j = Jellewery::with('lots')->where('id', $request->id)->firstOrFail();
        $j->lots()->detach();
        $j->lots()->attach($request->lots);
        $data = Jellewery::with('lots')->get();
        return response()->json($data, 200);
    }
    function deleteLots(Request $request){
        $j = Jellewery::findOrFail($request->id);
        $j->lots()->detach();
        $j->delete();
        $data = Jellewery::with('lots')->get();
        return response()->json($data);
    }
}
