<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    function index()
    {
        $pageTitle = 'welcome';

        return view('welcome', ['pageTitle' => $pageTitle]);
    }
}
