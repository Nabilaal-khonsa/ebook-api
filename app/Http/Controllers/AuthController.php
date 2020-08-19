<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return[
            "nis" => 3103118096,
            "name" => "Nabila Al Khonsa",
            "gender" => "Perempuan",
            "phone" => 628811672794,
            "class" => "XII RPL 3"
        ];
    }
}
