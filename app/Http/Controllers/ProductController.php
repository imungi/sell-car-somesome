<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Utils\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('createnew');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|file',
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required',
        ]);

        $product = new Product();
        $product->photo=Helper::upload($request->photo);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->detail=$request->detail;

        $product->user_id=Auth::user()->id;
        $product->save();

        return redirect("/details/$product->id");
    }

    public function marksold($id)
    {
        $product=Product::find($id);
        $product->is_sold=!$product->is_sold;

        $product->save();

        return redirect("/profile");
    }

    public function change($id)
    {
        $product=Product::find($id);
        return view('editproduct',compact('product'));
    }

    public function delete($id)
    {
        $product=Product::find($id);
        $product->delete();

        return redirect("/profile");
    }

    public function update_product(Request $request)
    {
        $product=Product::find($request->id);
        $product->photo=Helper::upload($request->photo);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->detail=$request->detail;

        $product->user_id=Auth::user()->id;
        $product->save();

        return redirect("/details/$product->id");
    }
}
