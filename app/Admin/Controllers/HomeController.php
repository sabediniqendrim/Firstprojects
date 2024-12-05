<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Http\Controllers\AppointmentController;

class HomeController extends Controller
{
    public function index(Content $content)
    {
      
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    // $column->append(AppointmentController::index());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });

        return $content
        ->header('PHP\'s configuration')
        ->description(' ')
        ->body(
            view('scheduler',compact('data')));

    }
}
