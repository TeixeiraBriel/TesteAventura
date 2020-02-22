<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class comumController extends Controller
{
    public function index()
    { 
        $categories = Categories::get();
        return view('welcome', compact('categories'));
    }
}
