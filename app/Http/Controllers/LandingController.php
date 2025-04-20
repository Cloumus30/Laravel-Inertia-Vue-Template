<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingController extends Controller
{
    public function __construct()
    {
        Inertia::setRootView('app');
    }
    public function index(){
        return Inertia::render('Landing/Landing');
    }

    public function detailProject($id){
        return Inertia::render('Landing/DetailProject');
    }

    public function indexProjects(){
        return Inertia::render("Landing/ListProjects");
    }
}
