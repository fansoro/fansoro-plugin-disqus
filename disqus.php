<?php

/**
 * Morfy Disqus Plugin
 *
 * (c) Romanenko Sergey / Awilum <http://morfy.org>
 * (c) Moncho Varela / Nakome <http://monchovarela.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Disqus
{
    public static function comments()
    {
        echo('<div id="disqus_thread"></div>
    		<script type="text/javascript">
    			var disqus_shortname = "'.Morfy::$plugins['disqus']['disqus_shortname'].'";
    			(function() {
    				var dsq = document.createElement("script");
    				dsq.type = "text/javascript";
    				dsq.async = true;
    				dsq.src = "//" + disqus_shortname + ".disqus.com/embed.js";
    				(document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);
    			})();
    		</script>
    		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>');

    }
}
