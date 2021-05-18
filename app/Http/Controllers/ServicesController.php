<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show(Request $request)
    {
        if (!$service = Service::where('name', $request->name)->first())
            return response('Service not found', 404);
        else
            return view('Service', compact($service));
    }
}
