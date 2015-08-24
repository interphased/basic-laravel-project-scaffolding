<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return Response
     */
    public function home()
    {
        return view('pages.home');
    }
}
