<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Models\BusinessHour;
use App\Services\AppointmentService;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form\Field\Id;

class AppointmentController extends Controller
{
    public static function index()
    {
        $datePeriod = CarbonPeriod::create(now()->add('1 day'), now()->add('1 day')->addDays(11));

        $appointments = [];

        foreach($datePeriod as $date){
            $appointments [] = (new AppointmentService)->generateTimeData($date);
        }

        return view('dashboard.terminesuper', compact('appointments'));
    }

    public function reserve(AppointmentRequest $request)
    {

        $data = $request->merge(['user_id'=>auth()->id()])->toArray();

        Appointment::create($data);

        return back();
    }
    

    public function alletermine()
    {
        $alletermine=Appointment::Where(['user_id'=>auth()->id()])->get();
        return  view('dashboard.alletermine', compact('alletermine'));
    }

}
