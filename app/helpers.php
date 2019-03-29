<?php

/**
 * 转换当前路由名称
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}