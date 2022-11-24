<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index() {
        return response()->json([
            "result"    =>  "Exito"
        ], Response::HTTP_OK);
    }
}
