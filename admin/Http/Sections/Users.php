<?php

namespace Admin\Http\Sections;

use App\Models\Client;
use phpDocumentor\Reflection\Types\Null_;
use SleepingOwl\Admin\Section;
use AdminDisplay;
use AdminColumn;
use AdminFormElement;
use AdminForm;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Navigation\Page;
use KodiComponents\Navigation\Contracts\PageInterface;

use App\User;


class Users extends Section implements Initializable
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

        $this->addToNavigation($priority = 500, function () {
            return User::count();
        })->setIcon('fa fa-building');
        $this->title = 'Пользователи';
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
                AdminColumn::text('name', 'Имя'),
                AdminColumn::text('email', 'Почта'),
                AdminColumn::text('sex', 'Пол'),
                AdminColumn::text('role', 'Роль')
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
            AdminFormElement::text('email', 'Почта')->required(),
            AdminFormElement::image('avatar', 'Аватар'),
            AdminFormElement::checkbox('in_base')->setLabel('Попросил опубликовать резюме'),
            AdminFormElement::checkbox('published')->setLabel('Опубликовано'),
            AdminFormElement::password('password', 'Пароль'),
            AdminFormElement::text('name', 'Имя'),
            AdminFormElement::text('surname', 'Фамилия'),
            AdminFormElement::text('patronymic', 'Отчество'),
            AdminFormElement::text('tel', 'Телефон'),
            AdminFormElement::text('skype', 'Скайп'),
            AdminFormElement::text('birth', 'Год рождения'),
            AdminFormElement::text('height', 'Рост'),
            AdminFormElement::text('weight', 'Вес'),
            AdminFormElement::text('lang_skills', 'Языки'),
            AdminFormElement::text('id_cart', 'id_cart'),
            AdminFormElement::text('visa', 'visa'),
            AdminFormElement::checkbox('skype_conf')->setLabel('Собеседование по скайпу'),
            AdminFormElement::text('education', 'Образование'),
            AdminFormElement::text('experience', 'Опыт работы'),
            AdminFormElement::text('city', 'Город'),
            AdminFormElement::text('vs', 'vs'),
            AdminFormElement::text('company', 'Компания'),
            AdminFormElement::datetime('payed_to', 'Оплачен до'),
            AdminFormElement::select('role_id', 'Роль')
                ->setOptions(User::ROLES)->required()
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
