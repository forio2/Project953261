<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerTeacher extends Controller
{
    public function index()
    {
        return view('classroom/create');
    }
}
