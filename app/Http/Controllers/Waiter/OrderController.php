<?php

namespace App\Http\Controllers\Waiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\CustomerHasRoom;
use App\Events\OrderSubmitted;

class OrderController extends Controller
{
   
    public function index()
    {
        $room=Room::all();
        $roomType = RoomType::all();
        return view('waiter.order.index',compact('room','roomType'));
    }
    public function selectCategory($room)
    {
        $category = Category::all();
        return view('waiter.order.category',compact('category','room'));
    }
    public function selectItem($room,$category)
    {
        $item = Item::where('item_category',$category)->get();
        return view('waiter.order.item',compact('item','room','category'));
    }
    public function selectQuantity($room,$category,$item)
    {
        $price = Item::where('item_name',$item)->get();
        return view('waiter.order.quantity',compact('item','room','category','price'));
    }
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveOrder(Request $request,$room,$category,$item)
    {
        $roomId = Room::where('room_number',$room)->pluck('id');
        $customerId = CustomerHasRoom:: where('room_id',$roomId)->pluck('customer_id');
        $order = new Order();
        switch ($request->input('action')){
            case 'back':
                return redirect(route('order.item',[$room,$category]));
            break;
            case 'next':
                foreach($roomId as $rid){
                    foreach($customerId as $cid){
                $order->item = $item;
                $order->quantity = $request->quantity;
                $order->room_id = $rid;
                $order->customer_id = $cid;
                $order->note = $request->note;
                $data=([
                    'item'=> $item,
                    'quantity'=> $request->quantity,
                    'room'=> $room,
                    
                ]);
                event(new OrderSubmitted($data));
                $order->save();

            }
        }
                return redirect(route('order.category',$room));

        }
            
    }
    public function hello()
    {
        $order=Order::all();
        return view('hello',compact('order'));
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
