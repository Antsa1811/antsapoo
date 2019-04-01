<?php
/**
 * Class pour autoloader dans le core
 */

namespace Core;

class Autoloader{
    
    /**
     * Function qui a le fonction de charger la class autoload
     */
     static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    
    
    /**
     * Function de charger les classes
     * @param type $class
     */
    static function autoload($class){
        if(strpos($class,__NAMESPACE__ . '\\') === 0){
            $class= str_replace(__NAMESPACE__ . '\\', '' , $class);
            $class= str_replace('\\','/', $class);
            require __DIR__ .'/'. $class .'.php';
        }
    }
    
}