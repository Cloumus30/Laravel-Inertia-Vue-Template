<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingController extends Controller
{
    public function __construct()
    {
        Inertia::setRootView('landing');
    }
    public function index(){
        return Inertia::render('Landing');
    }
}
