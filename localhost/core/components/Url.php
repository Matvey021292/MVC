<?php
namespace core\components;

class Url
{

    static public function getSegments()
    {

        $rout = isset($_GET['r']) ? $_GET['r'] : '';

        $routs = explode('/', $rout);
        if (empty($routs[0])) {
            return [];
        }

        $lastIndex = count($routs) - 1;
        if(empty($routs[$lastIndex])){
            array_pop($routs);
        }

        return $routs;
    }

    static public function getSegment($n) {
        $routes = self::getSegments();
        if(isset($routes[$n])){
            return $routes[$n];
        }
        return null;
    }
}

?>