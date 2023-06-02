<?php

namespace app\lib;

class Autoload
{
        public static function autoload($className)
        {
            $className = str_replace('app', '', $className);
            $className = $className . '.php';

            if (file_exists(APP_PATH . $className)) {
                require_once APP_PATH . $className;
            }
        }
}
spl_autoload_register(__NAMESPACE__. '\AutoLoad::autoload');
