<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site;

use BasicApp\Core\Event;

abstract class BaseSiteEvents extends \CodeIgniter\Events\Events
{

    const EVENT_PAGE_TEXT = 'ba:page_text';

    const EVENT_SEED = 'ba:site_seed';

    public static function pageText($text)
    {
        $event = new Event;

        $event->result = $text;

        static::trigger(static::EVENT_PAGE_TEXT, $event);

        return $event->result;
    }

    public static function seed($created)
    {
        static::trigger(static::EVENT_SEED, $created);
    }

    public static function onPageText($callback)
    {
        static::on(static::EVENT_PAGE_TEXT, $callback);
    }

    public static function onSeed($callback)
    {
        static::on(static::EVENT_SEED, $callback);
    }

}