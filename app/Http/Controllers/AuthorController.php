<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wrappers\CustomWrapper;

class AuthorController extends Controller
{
    public function index(CustomWrapper $custom, Request $request)
    {
        return $custom->getAuthors($request->route()->parameters());
    }

    public function getAuthorBooks($id, CustomWrapper $custom, Request $request)
    {
        return $custom->getAuthorBooks($id, $request->route()->parameters());
    }
}
