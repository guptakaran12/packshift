<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function get(Request $request)
    {
        $type = $request->type ?? null;
        $parentId = $request->id ?? null;

        if(strtolower($type) === '#state' || strtolower($type) === '#move_from_state' || strtolower($type) === '#move_to_state'){
            $data = getStatesByCountry($parentId);
            return response()->json(['status' => true, 'data' => $data,'type' => $type], 200);
        }else{
            $data = getCitiesByState($parentId);
            return response()->json(['status' => true, 'data' => $data,'type' => $type], 200);
        }
    }
}
