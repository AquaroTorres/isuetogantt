<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GanttController extends Controller
{
    public function index()
    {
        return view('gantt');
    }
}