<?php

namespace modules\disqus;

use diversen\conf;

class module {
    
    public static function getDisqusThread () {
        $disqus_short_name = conf::getModuleIni('disqus_short_name');
        if (!$disqus_short_name) {
            return '';
        }
        
        $str = <<<EOF
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = '$disqus_short_name'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
    
EOF;
        return $str;
    }    
    
    public static function subModulePostContent($options = array ()) {
        if (!isset($options['mode']) OR $options['mode'] != 'view') {
            return;
        }
        return self::getDisqusThread();
    }   
}
