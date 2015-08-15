<?php

namespace modules\disqus\config;

use modules\configdb\module as configdb;





class module {
    public function indexAction () {

        configdb::displayConfig('disqus');
    }
}
