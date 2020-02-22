<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function getCategories()
    {
        $categories = Categories::where('id',1)
            ->with('categories')
            ->get();   
        return view('categories', compact('categories'));
    }
    public function filhos(int $id)
    {
        $categories = Categories::where('id',$id)
            ->with('categories')
            ->get();   
        return view('categories', compact('categories'));
    }
    public function relatorio()
    {
        $categories = Categories::whereNull('category_id')
            ->with('childCategories')
            ->orderby('title', 'asc')
            ->get();
        return view('relatorio', compact('categories'));
    }
    public function Create()
    { 
        $categories = Categories::get();
        //dd($categories);
        return view('create', compact('categories'));
    }
    public function gravar(Request $request){
        $categories = Categories::create($request->all()); 

        return view('welcome');
    }
}
