<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119099,
        'name' => 'Khansa Imani',
        'gender' => 'Female',
        'phone' => '081227252595',
        'class' => 'XII RPL 3'];
  }
}