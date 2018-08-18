<?php

namespace Admin\Http\Sections;

use App\Models\CourseCategory;
use SleepingOwl\Admin\Section;
use AdminDisplay;
use AdminColumn;
use AdminFormElement;
use AdminForm;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Navigation\Page;
use KodiComponents\Navigation\Contracts\PageInterface;

use App\Models\Course;


class Courses extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;


    /**
     * Initialize class.
     */
    public function initialize()
    {
        app()->booted(function () {
            $page = \AdminNavigation::getPages()->findById('courses');
            $page->setPages(function (PageInterface $subpage) {
                $subpage->addPage(new Page(Course::class))
                    ->setIcon('fa fa-building')
                    ->setTitle('Курсы');
            });
        });
    }


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatables();
        $display->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::text('name', 'Название'),
                AdminColumn::text('duration', 'Продолжительность'),
                AdminColumn::datetime('date', 'Дата')->setFormat('d.m.Y')
            );

        return $display;

    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {

        $display = AdminForm::panel();
        $display->addBody([
            AdminFormElement::text('name', 'Название')->required(),
            ($id) ? AdminFormElement::text('slug', 'Короткий URL') : '',
            AdminFormElement::text('description', 'Описание')->required(),
            AdminFormElement::checkbox('on_main', 'На главной'),
            AdminFormElement::text('duration', 'Продолжительность')->required(),
            AdminFormElement::date('date', 'Дата'),
            AdminFormElement::text('price', 'Цена'),
            AdminFormElement::select('category_id', 'Категория')
                ->setModelForOptions(new CourseCategory())->setDisplay('name')->required(),
            AdminFormElement::wysiwyg('content', 'Текст')->required()
        ]);

        return $display;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}
