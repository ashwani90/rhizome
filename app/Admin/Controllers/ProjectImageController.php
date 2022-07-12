<?php

namespace App\Admin\Controllers;

use App\Models\ProjectImage;
use App\Models\Projects;
use App\Admin\Controllers\ProjectController;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProjectImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectImage());

        $grid->column('id', __('Id'));
        $grid->column('url', __('Url'));
        $grid->column('project_id', __('Project id'));
        $grid->column('priority', __('Priority'));
        $grid->column('enabled', __('Enabled'));

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
        $show = new Show(ProjectImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('url', __('Url'));
        $show->field('project_id', __('Project id'));
        $show->field('priority', __('Priority'));
        $show->field('enabled', __('Enabled'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectImage());

        $form->image('url', __('Url'))->move("projects_all");
        $form->number('priority', __('Priority'));
        $form->number('enabled', __('Enabled'));
        $form->select('project_id')->options(Projects::all()->pluck('name','id'));

        return $form;
    }
}
