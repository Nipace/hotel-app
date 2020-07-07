<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Customer;
use App\CustomerHasRoom;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomType = RoomType::all();
        $room = Room::where('is_available','yes')->get();
  
        return view('receptionist.customer.index',compact('roomType','room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewRoom()
    {
        $roomType = RoomType::all();
        $room = Room::where('is_available','yes')->get();
        return view('receptionist.customer.viewroom',compact('roomType','room'));
    }
    public function storeRoom(Request $request, $id)
    {
      
        foreach($request->room as $room){
           
            $room_id=Room::where('room_number',$room)->pluck('id');
            foreach($room_id as $ids)
          {
            $addedroom = new CustomerHasRoom();
            $addedroom->customer_id = $id;
            $addedroom->room_id=$ids;
            $addedroom->save();
            $rooms=Room::find($ids);
            $rooms->is_available="no";
            $rooms->update();
          }
            
        }
        
        return redirect(route('customer.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->days = $request->days;
        $customer->save();
        return redirect(route('room.add',$customer->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
