<?php

namespace App\Admin\Controllers;

use App\Models\Blog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BlogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('desc', __('Desc'));
        $grid->column('date', __('Date'));
        $grid->column('category', __('Category'));
        $grid->column('image', __('Image'));
        $grid->column('author', __('Author'));
        $grid->column('tags', __('Tags'));

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
        $show = new Show(Blog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('desc', __('Desc'));
        $show->field('date', __('Date'));
        $show->field('category', __('Category'));
        $show->field('image', __('Image'));
        $show->field('author', __('Author'));
        $show->field('tags', __('Tags'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Blog());

        $form->textarea('title', __('Title'));
        $form->textarea('desc', __('Desc'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('category', __('Category'));
        $form->image('image', __('Image'))->move("blogs");;
        $form->text('author', __('Author'));
        $form->text('tags', __('Tags'));

        return $form;
    }
}
