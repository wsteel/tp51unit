<?php
/**
 * Created by Wang.Gang
 * Mailto glogger#gmail.com
 * 2019/5/15
 */
use think\Container;

define('ROOT_PATH', '/../../../../../../');
define('APP_PATH', __DIR__ . '/../../../../../../application/');
define('EXTEND_PATH', __DIR__.'/../../../../../../extend/');
require __DIR__ . '/../../../../../../thinkphp/base.php';
Container::get('app')->initialize();