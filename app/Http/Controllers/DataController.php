<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open()
    {
        $data = "This data is open and can be accessed without the client being authenticated";
        return response()->json(compact('data'), 200);
    }

    public function closedOnlyLogged()
    {
        $data = "OK: Only authorized users can see this, and you're authorized";
        return response()->json(compact('data'), 200);
    }

    public function closedOnlyAdmin()
    {
        $data = "OK: Only admin users can see this, and you're an admin";
        return response()->json(compact('data'), 200);
    }
}