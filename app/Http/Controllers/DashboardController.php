<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user'))
        {
            return view('userDashboard');
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            return view('admin_dashboard');
        }
    }
    public function shop()
    {
        return view('shop');
    }
    public function addProduct()
    {
        if(Auth::user()->hasRole('user'))
        {
            return view('userDashboard');
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            return view('admin.addNewProduct');
        }
    }
    public function allProducts()
    {
        if(Auth::user()->hasRole('user'))
        {
            return view('userDashboard');
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            return view('admin.allProducts');
        }
    }
    public function find($id)
    {
        if(Auth::user()->hasRole('user'))
        {
            return view('userDashboard');
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            $data = Product::find($id);
            return view('admin.editProduct')->with('data',$data);
        }
    }
}
