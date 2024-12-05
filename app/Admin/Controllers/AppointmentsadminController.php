<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Layout\Content;
use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Models\BusinessHour;
use App\Services\AppointmentService;
use Carbon\CarbonPeriod;


class AppointmentsadminController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.index'))
            ->description(trans('admin.description'))
            ->body(
      
                
            $this->indexadmin()
            );
    }

    public static function indexadmin()
    {
        $datePeriod = CarbonPeriod::create(now()->add('1 day'), now()->add('1 day')->addDays(8));

        $appointments = [];

        foreach($datePeriod as $date){
            $appointments [] = (new AppointmentService)->generateTimeData($date);
        }

        return view('admin.terminesuper', compact('appointments'));
    }

    public function reserveadmin(AppointmentRequest $request)
    {

        $data = $request->merge(['user_id'=>auth()->id()])->toArray();

        Appointment::create($data);

        return back();
    }

}
