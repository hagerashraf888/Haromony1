<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mirror;


class MirrorController extends Controller
{
    public function get_mirror()
    {
    	$products = Mirror::all();
        $type = "Products";
        
        return view('admin/mirror',compact('products','type'));
    }

    public function add_product_page()
    {
        $type = "Product";
        return view('admin/addproduct',compact('type'));
    }

    public function add_product(Request $request)
    {
        $product = new Mirror();
        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_mirror');
    }

    public function edit_product_page($id)
    {
        $type = "Product";
        $product = Mirror::find($id);
        return view('admin/editproduct',compact('type','product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Mirror::find($id);

        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_mirror');
    
    }

    public function delete_product($id)
    {
        $product = Mirror::find($id);
        //dd($brand);
        $product->delete();
        return back();

    }
}
