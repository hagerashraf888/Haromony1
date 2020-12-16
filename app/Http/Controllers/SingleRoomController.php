<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SingleRoom;


class SingleRoomController extends Controller
{
    public function get_singleroom()
    {
    	$rooms = SingleRoom::all();
        $type = "Rooms";
        
        return view('admin/singleroom',compact('rooms','type'));
    }

    public function add_room_page()
    {
        $type = "Room";
        return view('admin/addroom',compact('type'));
    }

    public function add_room(Request $request)
    {
        $room = new SingleRoom();
        $room->name=$request->get('room_name');
        $room->price=$request->get('room_price');
        $room->quantity=$request->get('room_quantity');
        $room->room_id=$request->get('room_id');

        $room->save();
        return redirect()->route('get_singleroom');
    }

    public function edit_room_page($id)
    {
        $type = "Room";
        $room = SingleRoom::find($id);
        return view('admin/editroom',compact('type','room'));
    }

    public function update_room(Request $request, $id)
    {
        $room = SingleRoom::find($id);

        $room->name=$request->get('room_name');
        $room->price=$request->get('room_price');
        $room->quantity=$request->get('room_quantity');
        $room->room_id=$request->get('room_id');

        $room->save();
        return redirect()->route('get_singleroom');
    
    }

    public function delete_room($id)
    {
        $room = SingleRoom::find($id);
        //dd($brand);
        $room->delete();
        return back();

    }
    
}

