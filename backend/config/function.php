<?php

if (!method_exists('d')) {
    function d()
    {
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
    }
}

if (!method_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die;
    }

}
