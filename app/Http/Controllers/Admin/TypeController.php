<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    //
    public function index()
    {
    	return view('Admin.type.type');
    }
}