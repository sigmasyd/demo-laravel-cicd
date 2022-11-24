<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Http\Response;
//use Symfony\component\HttpFoundation\Response;


class UserController extends Controller{
    public function index(){

        $users = Users::all();

        return response()->json([
            "result" => $users
        ], Response::HTTP_OK);
    }
}
