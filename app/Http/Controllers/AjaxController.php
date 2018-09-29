<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionsPurchase;

class AjaxController extends Controller
{

    public function reserve(Request $request){

        $validationData = $request->validate([
            'chair' => 'required|int',
            'session'=>'required|int',
        ]);

        SessionsPurchase::query()->insert([
                'sessions_id' => $validationData['session'],
                'chair' => $validationData['chair'],
                'created_at' => date("Y-m-d H:i:s")
        ]);

        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );

        return response()->json($response);
    }











}
