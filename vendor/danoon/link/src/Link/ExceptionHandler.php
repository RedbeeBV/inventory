<?php

namespace Link;
/**
 * Class ExceptionHandler
 * @package MVC
 */
class ExceptionHandler
{
    /**
     * @param $num
     * @param $str
     * @param $file
     * @param $line
     * @param null $context
     * @throws \ErrorException
     */
    public static function error($num, $str, $file, $line, $context = null)
    {
        throw new \ErrorException($str, 0, $num, $file, $line);
    }

    /**
     * @param $exception
     */
    public static function exception($exception)
    {
        echo '<html>';
        echo '<head>';
        echo '<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/paper/bootstrap.min.css" rel="stylesheet">';
        echo '</head>';
        echo '<body class="container">';
        echo '<div class="panel panel-primary">';
        echo '<div class="panel-heading">';
        echo '<h3 class="panel-title">';
        echo $exception->getMessage();
        echo '</h3>';
        echo '</div>';
        echo '</div>';
        echo '<pre>';
        echo $exception->getTraceAsString();
        echo '</pre>';
        echo '</body>';
        echo '</html>';
    }
}
