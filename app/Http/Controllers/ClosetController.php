<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Closet;


class ClosetController extends Controller
{
    public function get_closet()
    {
    	$products = Closet::all();
        $type = "Products";
        
        return view('admin/closet',compact('products','type'));
    }

    public function add_product_page()
    {
        $type = "Product";
        return view('admin/addproduct',compact('type'));
    }

    public function add_product(Request $request)
    {
        $product = new Closet();
        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_closet');
    }

    public function edit_product_page($id)
    {
        $type = "Product";
        $product = Closet::find($id);
        return view('admin/editproduct',compact('type','product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Closet::find($id);

        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_closet');
    
    }

    public function delete_product($id)
    {
        $product = Closet::find($id);
        //dd($brand);
        $product->delete();
        return back();

    }
}
