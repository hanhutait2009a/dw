<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        //
        return view('list',['list'=> Product::paginate(50)]);
    }
    public function create()
    {
        //
        return view('create');
    }
    public function store(Request $request)
    {
        //
        $obj = new Product();
        $obj->id = $request->get('id');
        $obj->name = $request->get('name');
        $obj->price = $request->get('price');
        $obj->img = $request->get('img');
        $obj->save();
        return redirect('/products/list');
    }
}
