<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Table;


class TableController extends Controller
{
    public function get_table()
    {
    	$products = Table::all();
        $type = "Products";
        
        return view('admin/table',compact('products','type'));
    }

    public function add_product_page()
    {
        $type = "Product";
        return view('admin/addproduct',compact('type'));
    }

    public function add_product(Request $request)
    {
        $product = new Table();
        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_table');
    }

    public function edit_product_page($id)
    {
        $type = "Product";
        $product = Table::find($id);
        return view('admin/editproduct',compact('type','product'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Table::find($id);

        $product->name=$request->get('product_name');
        $product->price=$request->get('product_price');
        $product->quantity=$request->get('product_quantity');
        $product->product_id=$request->get('product_id');

        $product->save();
        return redirect()->route('get_table');
    
    }

    public function delete_product($id)
    {
        $product = Table::find($id);
        //dd($brand);
        $product->delete();
        return back();

    }
}
