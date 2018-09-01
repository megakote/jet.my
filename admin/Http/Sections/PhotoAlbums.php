<?php

namespace Admin\Http\Sections;

use SleepingOwl\Admin\Section;
use AdminDisplay;
use AdminColumn;
use AdminFormElement;
use AdminForm;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Navigation\Page;
use KodiComponents\Navigation\Contracts\PageInterface;

use App\Models\PhotoAlbum;


class PhotoAlbums extends Section implements Initializable
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
        app()->booted(function() {
            $page = \AdminNavigation::getPages()->findById('photos');
            $page->setPages(function (PageInterface $subpage) {
                $subpage->addPage(new Page(PhotoAlbum::class))
                    ->setIcon('fa fa-building')
                    ->setTitle('Альбомы');
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
                AdminColumn::image('cover_image', 'Обложка'),
                AdminColumn::text('title', 'Заголовок')
            );

        return $display;

    }

    /**
     * @param int $id
     *AdminFormElement::images(string $key, string $label = null): static

     * @return FormInterface
     */
    public function onEdit($id)
    {
        $display = AdminForm::panel();
        $display->addBody([
            AdminFormElement::text('title', 'Заголовок')->required()->unique(),
            ($id) ? AdminFormElement::text('slug', 'Короткий URL') : '',
            AdminFormElement::wysiwyg('description', 'Описание'),
            AdminFormElement::images('images', 'Массовая загрузка')->storeAsJson(),
            AdminFormElement::checkbox('on_main', 'Выводить на главной'),
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
