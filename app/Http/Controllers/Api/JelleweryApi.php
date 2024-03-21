<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gems;
use App\Models\Lots;
use Illuminate\Http\Request;

class JelleweryApi extends Controller
{
    public function getLotsByGemId($id)
    {
        $gems = Gems::findOrFail($id);
        return $gems->lots;
    }
}
