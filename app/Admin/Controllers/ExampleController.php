<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AppointmentController;

class ExampleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Termine Buchung';


    public function index(Content $content)
    {
    
        return $content
        ->title('termine')
        ->description('termine te shpejta...')
        ->row(function (Row $row) {

            $row->column(12, function (Column $column) {
                $column->append(AppointmentController::index());
            });
        });

    return $content;

}
}
        