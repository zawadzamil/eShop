<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{


    public function index()
    {
        if (Auth::user()->hasRole('user')) {
            return view('userDashboard');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('admin.admin_dashboard');
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
        if (Auth::user()->hasRole('user')) {
            return view('userDashboard');
        } elseif (Auth::user()->hasRole('admin')) {
            $data = Product::find($id);
            return view('admin.editProduct')->with('data', $data);
        }
    }

    public function findCatagorywise()
    {
        if (Auth::user()->hasRole('user')) {
            return view('userDashboard');
        } elseif (Auth::user()->hasRole('admin')) {


            $productData = Product::orderBy('id')->get();


            return view('admin.catagorywiseProduct')->with('productData', $productData);
        }
    }

    public function createBrand()
    {
        if (Auth::user()->hasRole('user')) {
            return view('userDashboard');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('brand.create');
        }
    }

    public function showBrand()
    {
        if (Auth::user()->hasRole('user')) {
            return view('userDashboard');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('brand.show');
        }
    }

    public function showUser()
    {
        if (Auth::user()->hasRole('user')) {
            return view('userDashboard');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('users.users');
        }
    }
}
