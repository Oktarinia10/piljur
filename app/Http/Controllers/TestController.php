<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function __invoke(Request $request)
    {
        return view('pages.transactions.detailpembayaran');
    }
}