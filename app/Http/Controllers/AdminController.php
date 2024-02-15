<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                $rooms = Room::all();
                return view('home.index', compact('rooms'));
            }
            else if($usertype == 'admin')
            {
                return view('admin.index');
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        $rooms = Room::all();
        return view('home.index', compact('rooms'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $data = new Room;
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;
        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back();
    }

    public function view_room()
    {
        $rooms = Room::all();
        return view('admin.view_room', compact('rooms'));
    }

    public function room_update($id)
    {
        $rooms = Room::findOrFail($id);
        return view('admin.update_room', compact('rooms'));
    }

    public function edit_room(Request $request, $id)
    {
        $data = Room::findOrFail($id);

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;
        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back();
    }

    public function room_delete($id)
    {
        $rooms = Room::findOrFail($id);
        $rooms->delete();
        return redirect()->back();
    }

    public function bookings()
    {
        $bookings = Booking::all();
        return view('admin.bookings', compact('bookings'));
    }
}
