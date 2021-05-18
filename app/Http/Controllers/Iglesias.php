<?php

namespace App\Http\Controllers;

use App\Models\Iglesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Iglesias extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        

    
}
