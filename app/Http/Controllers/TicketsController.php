<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TicketsController extends Controller
{
    //

    public function create()
    {
    	return view('tickets.create');
    }
}
