<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show(Request $request)
    {
        if ($service = Service::where('name', $request->slug)->first())
            return view('ServicesDetails', compact('service'));
        else
            return view('ServicesDetails');
    }
}
