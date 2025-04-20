<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function __construct() {
        Inertia::setRootView('app');
    }

    public function login(){
        return Inertia::render('Dashboard/Auth/Login');
    }
}
