<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SendMailtNotification;
use Notification;

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
                $galleries = Gallery::all();
                return view('home.index', compact('rooms','galleries'));
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
        $galleries = Gallery::all();
        $rooms = Room::all();
        return view('home.index', compact('rooms','galleries'));
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

    public function delete_booking($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->delete();
        return redirect()->back();
    }

    public function approve_book($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->status = 'Approved';
        $bookings->save();
        return redirect()->back();
    }

    public function reject_book($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->status = 'Rejected';
        $bookings->save();
        return redirect()->back();
    }

    public function view_gallery()
    {
        $galleries = Gallery::all();
        return view('admin.gallery', compact('galleries'));
    }

    public function upload_gallery(Request $request)
    {
        $galleries = new Gallery;
        $image = $request->image;
        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('gallery',$imageName);
            $galleries->image = $imageName;
            $galleries->save();
            return redirect()->back();
        }
    }

    public function delete_image($id)
    {
        $galleries = Gallery::findOrFail($id);
        $galleries->delete();
        return redirect()->back()->with('message', 'Image Deleted Successfully.');
    }

    public function all_messages()
    {
        $contacts = Contact::all();
        return view('admin.all_message', compact('contacts'));
    }

    public function send_mail($id)
    {
       $contacts = Contact::findOrFail($id);
       return view('admin.send_mail', compact('contacts'));
    }

    public function mail(Request $request,$id)
    {
        $contacts = Contact::findOrFail($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'endline' => $request->endline
        ];

        Notification::send($contacts, new SendMailtNotification($details));
        return redirect()->back();
    }

    public function view_slider()
    {
        $sliders = Slider::all();
        return view('admin.view_slider', compact('sliders'));
    }

    public function upload_slider(Request $request)
    {
        $sliders = new Slider;
        $image = $request->image;
        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('slider',$imageName);
            $sliders->image = $imageName;
            $sliders->save();
            return redirect()->back()->with('message','Image Uploaded Successfully');
        }
    }

    public function delete_slider_image($id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->delete();
        return redirect()->back()->with('message', 'Image Deleted Successfully.');
    }
}
