<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SingleBed;


class SingleBedController extends Controller
{
    public function get_singlebed()
    {
    	$products = SingleBed::all();
        $type = "Products";
        
        return view('admin/singlebed',compact('products','type'));
    }

    public function add_product_page()
    {
        $type = "Product";
        return view('admin/addproduct',compact('type'));
    }

    public function add_product(Request $request)
    {
        $product = new SingleBed();
        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_singlebed');
    }

    public function edit_product_page($id)
    {
        $type = "Product";
        $product = SingleBed::find($id);
        return view('admin/editproduct',compact('type','product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = SingleBed::find($id);

        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_singlebed');
    
    }

    public function delete_product($id)
    {
        $product = SingleBed::find($id);
        //dd($brand);
        $product->delete();
        return back();

    }
}
