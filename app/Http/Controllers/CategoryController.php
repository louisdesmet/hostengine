<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {       
        return CategoryResource::collection(Category::all());
    }
}
