<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        if(Auth::user()->role == 1){
            return view('admin/products.index');
        }
        else{
            return view('products.index');
        }
    }

}
