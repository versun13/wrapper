<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wrappers\CustomWrapper;

class BookController extends Controller
{

    public function index(CustomWrapper $custom, Request $request)
    {
        return $custom->getBooks($request->route()->parameters());
    }

}
