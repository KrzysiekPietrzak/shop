<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Exception;

class WelcomeController extends Controller
{
    /**
    @return View 
    * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("welcome",[
            'products' => Product::paginate(10)
        ]);

    }

   
}
