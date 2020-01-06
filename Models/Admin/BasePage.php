<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Models\Admin;

use BasicApp\HtmlPurifier\HtmlPurifierEntityBehavior;

abstract class BasePage extends \BasicApp\Site\Models\Page
{

    protected $modelClass = PageModel::class;

    public function getFormattedPublished()
    {
        return $this->page_published ? t('admin', 'Published') : t('admin', 'Not Published');
    }

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'htmlPurifier' => [
                'class' => HtmlPurifierEntityBehavior::class,
                'attributes' => [
                    'page_text'
                ]
            ]
        ]);
    }

}