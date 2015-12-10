<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/6/15
 * Time: 2:18 PM
 */

//ini_set('yaf.use_namespace', 1);
//ini_set('yaf.lowcase_path', 1);
ini_set('yaf.library', 'amie');

ini_set("yaf.action_prefer", 1);


function exception_handler($ex) {   //var_dump(1);
    $debug_trace = debug_backtrace();

    $exception_str = "Uncaught exception class=\n" . get_class($ex) . " \nmessage=" . $ex->getMessage() ."\nFile=" . $ex->getFile().  " \nline=" . $ex->getLine();

    var_dump($exception_str,$ex,$debug_trace);

    error_log($exception_str);

    ob_end_clean();

    die($exception_str);

}

set_exception_handler('exception_handler');
function my_error_handler($errno, $errstr, $errfile, $errline)
{
    $debug_trace = debug_backtrace();

    var_dump('my_error_handler',$errno, $errstr, $errfile, $errline,$debug_trace);

//    error_log("$errno, $errstr, $errfile, $errline");

    die;

}

set_error_handler("my_error_handler");
