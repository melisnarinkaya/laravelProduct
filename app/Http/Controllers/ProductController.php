<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return new ProductResource(Product::where('price', '>', 3)->get());
    }

    public function show($id)
    {
        return new ProductResource(Product::find($id));
    }

    public function create()
    {
        return view('posts.product');
    }

    public function store()
    {


        // $form->persist();
        //Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'price' => 'required',
        ]);

        $user = Product::create([
            'name' => request()->get('name'),
            'price' => request()->get('price'),
        ]);
        //auth()->($user);
        return redirect()->product();
    }

    public function urun(Request $request)
    {
        if ($request->get('gor') == "urun") {
          //  $products = Product::all();  //urunlerin tamamını hiçbir kısıtlama olmadan çekme
            $products=Product::where('price','>',3)->get();  //where condition ile yapma
            return view('posts.urun', compact('products'));
        }

        return view('posts.urun');
    }
}