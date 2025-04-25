<?php

namespace App\Http\Controllers;

use Exception;
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
        $param = request()->query('tl');
        throw new Exception("Error Processing Request", 500);
        
        return Inertia::render('Landing/DetailProject', [
            'titleParam' => $param
        ]);
    }

    public function indexProjects(){
        return Inertia::render("Landing/ListProjects");
    }
}
