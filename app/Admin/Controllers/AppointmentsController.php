<?php

namespace App\Admin\Controllers;

use App\Models\Appointment;
use App\Models\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AppointmentsController extends Controller
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
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header(trans('admin.detail'))
            ->description(trans('admin.description'))
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header(trans('admin.edit'))
            ->description(trans('admin.description'))
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.create'))
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Appointment);

        $grid->id('ID');
        $grid->author()->name('Patient');
        $grid->date('date');
        $grid->time('time');

        $grid->filter(function ($filter) {

            // Sets the range query for the created_at field
            $filter->between('created_at', 'Rezervuar nga - deri')->date();
            $filter->between('date', 'Terminet nga - deri')->date();
            $filter->where(function ($query) {

                $query->whereHas('author', function ($query) {
                    $query->where('name', 'like', "%{$this->input}%")->orWhere('email', 'like', "%{$this->input}%");
                });
            
            }, 'Name or Email');
        });
        
        $grid->enableHotKeys();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Appointment::findOrFail($id));

        $show->date('Date')->format('d-m-Y');
        $show->time()->unescape()->as(function ($time) {

            return "{$time->format('H:i')}";
       
       });
        $show->author('Patient info', function ($author) {
            $author->setResource('/admin/users');
            $author->id();
            $author->name();
            $author->email();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Appointment);

        $form->select('user_id', 'Klient')->options(User::all()->pluck('name', 'id'));;
        $form->date('date', 'Date');
        $form->time('time', 'Time');

        return $form;
    }
}
