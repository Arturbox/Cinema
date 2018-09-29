<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 28.09.2018
 * Time: 18:32
 */

namespace App\Http\Controllers;

use App\Models\Sessions;
use Illuminate\Http\Request;


class MovieController extends Controller
{

    public function index(Request $request)
    {
        //default filter parameters
        $filterData = [
            'start' => date('Y-m-d'),
            'end' => date('Y-m-d',strtotime(date('Y-m-d')." +1 day"))
        ];

        if ($request->isMethod('post')) {
            //post parameters in filter
            $filterData = $request->validate([
                'start' => 'required|date_format:Y-m-d',
                'end' => 'required|date_format:Y-m-d',
            ]);
            unset($_POST);
        }

        $sessions = Sessions::query()->whereBetween('start', $filterData )->get();

        return view('cinema.index',compact('sessions','filterData'));
    }








}