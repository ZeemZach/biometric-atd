<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()->hasRole('faculty')){
            return view('faculty.dashboard');
        }
        $student = User::where('id',auth()->user()->id)->with(['details','course'])->first();
        $dateWiseAttendances = Attendance::where('finger_id',$student->details['finger_id'])->with('userDetail')->orderBy('updated_at', 'Desc')->get()->groupBy(function ($val) {
            return Carbon::parse($val->created_at)->format('d-m-y');
        });
        return view('student.dashboard')->with(compact(['student','dateWiseAttendances']));
    }
}
