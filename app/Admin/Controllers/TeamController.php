<?php

namespace App\Admin\Controllers;

use App\Models\Team;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TeamController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Team';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Team());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('qualification', __('Qualification'));
        $grid->column('text', __('Text'));
        $grid->column('priority', __('Priority'));
        $grid->column('designation', __('Designation'));
        $grid->column('img', __('Img'))->image();

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
        $show = new Show(Team::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('qualification', __('Qualification'));
        $show->field('text', __('Text'));
        $show->field('priority', __('Priority'));
        $show->field('designation', __('Designation'));
        $show->field('img', __('Img'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Team());

        $form->text('name', __('Name'));
        $form->textarea('qualification', __('Qualification'));
        $form->textarea('text', __('Text'));
        $form->number('priority', __('Priority'));
        $form->text('designation', __('Designation'));
        $form->image('img', __('Img'))->move("team");

        return $form;
    }
}
