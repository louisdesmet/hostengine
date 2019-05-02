<?php

namespace App\Http\Controllers;

use App\Language;
use App\Http\Resources\Language as LanguageResource;

class LanguageController extends Controller
{
    public function index()
    {
        return LanguageResource::collection(Language::all());

    }
}
