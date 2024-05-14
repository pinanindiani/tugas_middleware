<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
    $this->middleware(function ($request, $next) {
        if (!method_exists($this, $request->route()->getActionMethod())) {
            return redirect('/products'); 
        }
        return $next($request);
    });
}

}
