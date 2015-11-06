<?php
const SHOW_DATA = true;
require dirname(__DIR__) . '/vendor/autoload.php';

$loop = \React\EventLoop\Factory::create();

\React\Filesystem\Filesystem::create($loop)->getAdapter()->symlink('link_get_contents.php', 'symlink_' . time() . '.php')->then(function ($contents) {
    var_export($contents);
}, function ($e) {
    echo $e->getMessage(), PHP_EOL;
});

$loop->run();
