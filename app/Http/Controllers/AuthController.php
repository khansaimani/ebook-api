<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return [
            "NIS" => 3103119099,
            "Name" => "Khansa Imani",
            "Gender" => "Perempuan",
            "Phone" => 6281227252595,
            "Class" => "XII RPL 3",
        ];
    }
}