<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 28.09.2018
 * Time: 18:32
 */

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\MovieSessions;
use App\Models\Sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class MovieController extends Controller
{

    public function index(Request $request)
    {
        //default filter parameters
        $filterData = [
            'start' => date('Y-m-d'),
            'end' => date('Y-m-d',strtotime(date('Y-m-d')." +1 day"))
        ];

        $sessions = Sessions::query()->whereBetween('start', $filterData )->get();

        return view('cinema.index',compact('sessions','filterData'));
    }








}