<?php 

    $path = $_SERVER['REQUEST_URI'];
    $path_url = explode('/', $path);
    $res = '/'.$path_url[1].'/'.$path_url[2];
    define("URL", $res);

    function redirect()
    {
        header('Location:'.URL);
        die();
    }

    function dump($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '<pre>';
    }

    function dd($var)
    {
        dump($var);
        //die();
    }
?>