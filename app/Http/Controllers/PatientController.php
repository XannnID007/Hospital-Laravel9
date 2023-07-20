<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function showpatient()
    {
        $data = [
            'doctors'    => Doctor::orderBy('name', 'asc')->get(),
            'patients'   => Patient::all()
        ];
        return view('patient.showpatient', compact('data'));
    }

    public function cekpelayanan()
    {
        $data = Doctor::all();
        return view('patient.cekpelayanan', compact('data'));
    }

    public function showpelayanan()
    {
        $dataPatient = DB::table('patients')->where('month')->get();
        $allPatient = [];
        $month = [];
        foreach ($dataPatient as $item) {
            $allPatient[]   = $item->allPatient;
            $month[]        = $item->month;
        }
        $data = [
            // 'doctors' => Doctor::all(),
            // 'doctors' => Doctor::where('name')->first(),
            'doctors' => DB::table('doctors')->where('name')->first(),
            'data' => DB::table('patients')->where('month', 'January')->get(),
            'allPatient' => $allPatient,
            'month'      => $month
        ];
        return view('patient.showpelayanan', compact('data'));
    }

    public function inputpelayanan()
    {
        return view('patient.inputpelayanan');
    }
}
