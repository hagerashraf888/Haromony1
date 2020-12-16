<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sofa;


class SofaController extends Controller
{
    public function get_sofa()
    {
    	$products = Sofa::all();
        $type = "Products";
        
        return view('admin/sofa',compact('products','type'));
    }

    public function add_product_page()
    {
        $type = "Product";
        return view('admin/addproduct',compact('type'));
    }

    public function add_product(Request $request)
    {
        $product = new Sofa();
        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_sofa');
    }

    public function edit_product_page($id)
    {
        $type = "Product";
        $product = Sofa::find($id);
        return view('admin/editproduct',compact('type','product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Sofa::find($id);

        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_sofa');
    
    }

    public function delete_product($id)
    {
        $product = Sofa::find($id);
        //dd($brand);
        $product->delete();
        return back();

    }
}
