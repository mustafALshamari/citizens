<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;

class CitizenController extends Controller
{
    public function index()
    {
       return view('show-citizen');
    }

    public function compare(Request $request)
    {
        $fullName = Citizen::CompareName($request->fullName)->get();

        return view('searched-page')->with('Citizen' ,$fullName);
    }
}
