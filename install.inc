<?php

use diversen\lang;
$_INSTALL['VERSION'] = 4.01;
$_INSTALL['PUBLIC_CLONE_URL'] = 'git://github.com/diversen/disqus.git';
$_INSTALL['PRIVATE_CLONE_URL'] = 'git@github.com:diversen/disqus.git';

$_INSTALL['MAIN_MENU_ITEM'] = array (
        'title' => lang::translate('Disqus', null, array('no_translate'=>true)),
        'url' => '/disqus/config/index',
        'module_name' => 'disqus',
        'parent' => 0,
        'weight' => 1,
        'auth' => 'admin',
        'admin_only' => 1,
        'section' => 'settings'
    );