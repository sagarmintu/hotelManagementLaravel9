<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $rooms = Room::findOrFail($id);
        return view('home.room_details', compact('rooms'));
    }

    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'date|after:start_date',
        ]);

        $data = new Booking;
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $isBooked = Booking::where('room_id',$id)
                            ->where('start_date','<=',$endDate)
                            ->where('end_date','>=',$startDate)
                            ->exists();

        if($isBooked)
        {
            return redirect()->back()->with('error-message', 'Sorry !!! This Room Is Already Booked. Please Try In Different Date.');
        }

        else
        {
            $data->start_date = $request->start_date;
            $data->end_date = $request->end_date;
            $data->save();
            return redirect()->back()->with('message', 'Room Booked Successfully !!!');
        }
    }

    public function contact(Request $request)
    {
        $data = new Contact;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return redirect()->back()->with('message', 'Thank You. You will be get back to you soon !!!');
    }

    public function our_rooms()
    {
        $rooms = Room::all();
        return view('home.our_rooms', compact('rooms'));
    }

    public function hotel_gallery()
    {
        $galleries = Gallery::all();
        return view('home.hotel_gallery', compact('galleries'));
    }

    public function contact_us()
    {
        $contact = Contact::all();
        return view('home.contact_us', compact('contact'));
    }
}
