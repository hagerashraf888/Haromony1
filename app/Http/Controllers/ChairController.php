<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chair;


class ChairController extends Controller
{
    public function get_chair()
    {
    	$products = Chair::all();
        $type = "Products";
        
        return view('admin/chair',compact('products','type'));
    }

    public function add_product_page()
    {
        $type = "Product";
        return view('admin/addproduct',compact('type'));
    }

    public function add_product(Request $request)
    {
        $product = new Chair();
        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_chair');
    }

    public function edit_product_page($id)
    {
        $type = "Product";
        $product = Chair::find($id);
        return view('admin/editproduct',compact('type','product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Chair::find($id);

        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_chair');
    
    }

    public function delete_product($id)
    {
        $product = Chair::find($id);
        //dd($brand);
        $product->delete();
        return back();

    }
}
