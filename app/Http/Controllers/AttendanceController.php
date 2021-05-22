<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    
    public function makeAttendance($id){
        $attendance = Attendance::create([
            'finger_id' => $id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $attendance;
    }

    public function todaysAttendance(){
        $attendances = Attendance::whereDate('created_at','=', Carbon::today()->toDateString())->with('userDetail')->get();
        return view('attendance.todays')->with(['attendances' => $attendances]);
    }
    
    public function everyDayAttendance(){
        $dateWiseAttendances = Attendance::with('userDetail')->orderBy('updated_at', 'Desc')->get()->groupBy(function ($val) {
            return Carbon::parse($val->created_at)->format('d-m-y');
        });
        return view('attendance.everyDay')->with(['dateWiseAttendances' => $dateWiseAttendances]);
    }
}
