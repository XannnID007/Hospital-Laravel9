<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = Doctor::all();
                return view('user.showuser', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name             = $request->name;
        $data->email            = $request->email;
        $data->date             = $request->date;
        $data->phone            = $request->number;
        $data->message          = $request->message;
        $data->doctor           = $request->doctor;
        $data->status           = 'In progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Appoinment Request Successfull. We will contact with you soon');
    }

    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            $data = Doctor::all();
            return view('user.my_appointment', compact('appoint', 'data'));
        } else {
            return redirect()->back();
        }
    }
    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function showUser()
    {
        $doctor = doctor::all();
        return view('user.showuser', compact('doctor'));
    }

    public function aboutUs()
    {
        return view('user.aboutUs');
    }

    public function showdoctors()
    {
        $doctor = doctor::all();
        return view('user.showdoctors', compact('doctor'));
    }
}
