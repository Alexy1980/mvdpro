<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;


/**
 * Class fundamentalSettings
 *
 * @property \App\FundamentalSetting $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class fundamentalSettings extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
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

    protected $model = '\App\fundamentalSetting';


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()/*->with('users')*/
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('name', 'Настройка')->setWidth('200px'),
                AdminColumn::text('var', 'Значение'),
                AdminColumn::text('description', 'Описание')
            )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        // поле var - нельзя редактировать, ибо нефиг системообразующий код редактировать

        return AdminForm::panel()
            ->addHeader([
                AdminFormElement::text('name', 'Имя'),
            ])
            ->addBody(
                [
                    AdminFormElement::wysiwyg('var', 'Переменная', 'ckeditor')->required(),
                    AdminFormElement::textarea('description', 'Описание'),
                ]
            )
            ->addFooter(
                AdminFormElement::text('value', 'Значение')->setReadonly($id)
            );
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()
            ->addHeader([
                AdminFormElement::text('name', 'Имя'),
            ])
            ->addBody(
                [
                  AdminFormElement::wysiwyg('var', 'Переменная', 'ckeditor')->required(),
                  AdminFormElement::textarea('description', 'Описание'),
                ]
            )
            ->addFooter(
                AdminFormElement::text('value', 'Значение')
    );

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
