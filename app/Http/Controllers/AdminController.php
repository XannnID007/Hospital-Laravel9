<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        $data = Doctor::all();
        return view('admin.add_doctor', compact('data'));
    }

    public function upload(Request $request)
    {
        $doctor                 = new doctor;
        $image                  = $request->file;
        $imagename              = time() . '.' . $image->getClientoriginalExtension();

        $request->file->move('doctorimage', $imagename);

        $doctor->image          = $imagename;
        $doctor->name           = $request->name;
        $doctor->phone          = $request->phone;
        $doctor->room           = $request->room;
        $doctor->speciality_id  = $request->speciality_id;

        $doctor->save();
        return redirect()->back()->with('success', 'Doctor Added Successfully');
    }

    public function showappointment()
    {
        $data = appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = Doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = doctor::find($id);
        return view('admin.updatedoctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality_id = $request->speciality_id;
        $doctor->room = $request->room;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->save();
        return redirect()->back()->with('success', 'Doctor Details Updated Successfully');
    }
}
