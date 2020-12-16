<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DinningRoom;


class DinningRoomController extends Controller
{
    public function get_dinningroom()
    {
    	$rooms = DinningRoom::all();
        $type = "Rooms";
        
        return view('admin/dinningroom',compact('rooms','type'));
    }

    public function add_room_page()
    {
        $type = "Room";
        return view('admin/addroom',compact('type'));
    }

    public function add_room(Request $request)
    {
        $room = new DinningRoom();
        $room->name=$request->get('room_name');
        $room->price=$request->get('room_price');
        $room->quantity=$request->get('room_quantity');
        $room->room_id=$request->get('room_id');

        $room->save();
        return redirect()->route('get_rooms');
    }

    public function edit_room_page($id)
    {
        $type = "Room";
        $room = DinningRoom::find($id);
        return view('admin/editroom',compact('type','room'));
    }

    public function update_room(Request $request, $id)
    {
        $room = DinningRoom::find($id);

        $room->name=$request->get('room_name');
        $room->price=$request->get('room_price');
        $room->quantity=$request->get('room_quantity');
        $room->room_id=$request->get('room_id');

        $room->save();
        return redirect()->route('get_rooms');
        
    }

    public function delete_room($id)
    {
        $room = DinningRoom::find($id);
        //dd($brand);
        $room->delete();
        return back();
    }
}
