<?php

namespace App\Http\Controllers;

use App\Mail\RecommendationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function recommend(Request $request)
    {
        $response = 'successfull';
        Mail::to('Cloudways@Cloudways.com')->send(new RecommendationEmail());
        return view('ContactForm', compact('response'));
    }
}
