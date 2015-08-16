<?php

namespace modules\disqus\config;

use diversen\lang;
use modules\configdb\module as configdb;

class module {

    public function indexAction() {
        configdb::displayConfig('disqus');
    }

    public static function getConfigSetup() {
        return $db_config = array(
            array('name' => 'disqus_short_name',
                'description' => lang::translate('Enter your disqus code'),
                'type' => 'text',
                'value' => '',
                'auth' => 'admin'),
        );
    }
}
