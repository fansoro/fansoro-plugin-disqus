<?php

/**
 * Fansoro Disqus Plugin
 *
 * (c) Romanenko Sergey / Awilum <http://fansoro.org>
 * (c) Moncho Varela / Nakome <http://monchovarela.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Disqus
{
    public static function comments()
    {
        $template = Template::factory(PLUGINS_PATH . '/disqus/templates/');
        $template->display('disqus.tpl');
    }
}
