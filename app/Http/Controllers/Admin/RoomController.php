<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;


class RoomController extends Controller
{
   public function index()
   {
       $room = Room::all();
       $roomType = RoomType::all();
       return view('admin.room.index',compact('room','roomType'));
   }
   public function store(Request $request)
   {
       $room = new Room();
       $room->room_number = $request->room_number;
       $room->room_type = $request->room_type;
       $room->save();
       return redirect(route('rooms.index'));
   }
}
