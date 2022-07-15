<?php

namespace App\Admin\Controllers;

use App\Models\Projects;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Projects';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Projects());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('name', __('Name'));
        $grid->column('subtitle', __('Subtitle'));
        $grid->column('url', __('Url'));
        $grid->column('type', __('Type'));
        $grid->column('location', __('Location'));
        $grid->column('date', __('Date'));
        $grid->column('priority', __('Priority'));
        $grid->column('scale', __('Scale'));
        $grid->column('opened', __('Opened'));
        $grid->column('scope', __('Scope'));
        $grid->column('team', __('Team'));
        $grid->column('image_dim', __('Image dim'));
        $grid->column('next_horizontal', __('Next horizontal'));
        $grid->column('next_empty', __('Next empty'));
        $grid->column('not_show', __('Not show'));
        $grid->column('add_below', __('Add below'));
        $grid->column('is_half', __('Is half'));
        $grid->column('stage', __('Stage'));

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
        $show = new Show(Projects::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('name', __('Name'));
        $show->field('subtitle', __('Subtitle'));
        $show->field('url', __('Url'));
        $show->field('type', __('Type'));
        $show->field('location', __('Location'));
        $show->field('date', __('Date'));
        $show->field('priority', __('Priority'));
        $show->field('scale', __('Scale'));
        $show->field('opened', __('Opened'));
        $show->field('scope', __('Scope'));
        $show->field('team', __('Team'));
        $show->field('image_dim', __('Image dim'));
        $show->field('next_horizontal', __('Next horizontal'));
        $show->field('next_empty', __('Next empty'));
        $show->field('not_show', __('Not show'));
        $show->field('add_below', __('Add below'));
        $show->field('is_half', __('Is half'));
        $show->field('stage', __('Stage'));
        $show->projectImages('ProjectImage', function ($images) {

            $images->resource('/admin/project-images');
        
            $images->id();
            $images->project_id();
        
            $images->filter(function ($filter) {
                $filter->like('project_id');
            });
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
        $form = new Form(new Projects());

        $form->text('title', __('Title'));
        $form->text('name', __('Name'));
        $form->text('subtitle', __('Subtitle'));
        $form->image('url', __('Url'))->move("projects");
        $form->text('type', __('Type'));
        $form->text('location', __('Location'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->number('priority', __('Priority'));
        $form->text('scale', __('Scale'));
        $form->text('opened', __('Opened'));
        $form->text('scope', __('Scope'));
        $form->text('team', __('Team'));
        $form->number('image_dim', __('Image dim'));
        $form->switch('next_horizontal', __('Next horizontal'));
        $form->number('next_empty', __('Next empty'));
        $form->switch('not_show', __('Not show'));
        $form->switch('add_below', __('Add below'));
        $form->number('is_half', __('Is half'));
        $form->text('stage', __('Stage'));

        return $form;
    }
}
