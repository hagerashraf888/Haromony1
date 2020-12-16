<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cupboard;


class CupboardController extends Controller
{
    public function get_cupboard()
    {
    	$products = Cupboard::all();
        $type = "Products";
        
        return view('admin/cupboard',compact('products','type'));
    }

    public function add_product_page()
    {
        $type = "Product";
        return view('admin/addproduct',compact('type'));
    }

    public function add_product(Request $request)
    {
        $product = new Cupboard();
        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_cupboard');
    }

    public function edit_product_page($id)
    {
        $type = "Product";
        $product = Cupboard::find($id);
        return view('admin/editproduct',compact('type','product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Cupboard::find($id);

        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_cupboard');
    
    }

    public function delete_product($id)
    {
        $product = Cupboard::find($id);
        //dd($brand);
        $product->delete();
        return back();

    }
}
