<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Home page
     *
     * @return View
     */
    public function index(): View
    {
        return view('home', []);
    }
}
