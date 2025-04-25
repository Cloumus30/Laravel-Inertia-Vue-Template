<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function successJsonResponse($data=null, $message='Success', $status=200){
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    public function errorJsonResponse(Array|String $message='Error', $data=null, $status=400){
        if(gettype($message) == 'array'){
            $msg = array_column($message, 0);
            $message = implode(' |',$msg);
        }
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $status);
    }
}
