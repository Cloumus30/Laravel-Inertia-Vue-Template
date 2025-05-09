<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __construct() {
        Inertia::setRootView('app');
    }
    public function index(){
        return Inertia::render("Dashboard/Home");
    }
}
