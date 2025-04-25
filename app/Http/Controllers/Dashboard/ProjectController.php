<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function __construct() {
        Inertia::setRootView('app');
    }

    public function index(){
        return Inertia::render("Dashboard/Portofolio/PortofolioPage");
    }

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'title' => 'required|string',
                'short_description' => 'required|string',
                'file' => 'required|file|max:4100',
                'link' => 'string'
            ]);
    
            if($validator->fails()){
                return $this->errorJsonResponse($validator->errors()->toArray());
            }
        } catch (\Throwable $th) {
            return $this->errorJsonResponse($th->getMessage(), status:500);
        }
    }
}
