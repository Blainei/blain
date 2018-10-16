<?php
/**
 * Created by PhpStorm.
 * User: blaine
 * Date: 2018/10/16
 * Time: 下午5:19
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}