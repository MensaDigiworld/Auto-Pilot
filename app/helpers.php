<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

if(!function_exists('menuactive')){

    function menuactive(array $route , $output = "active"){
        foreach($route as $routes){
            if(Route::currentRouteName() == $routes) return $output;
        }
    }
}

if(!function_exists('rootmenuactive')){

    function rootmenuactive(array $route , $output = "menu-open"){
        foreach($route as $routes){
            if(Route::currentRouteName() == $routes) return $output;
        }
    }
}

if(!function_exists('childmenuactive')){

    function childmenuactive(array $route , $output = "menu-is-opening"){
        foreach($route as $routes){
            if(Route::currentRouteName() == $routes) return $output;
        }
    }
}

if(!function_exists('childmenushow')){

    function childmenushow(array $route , $output = "d-block"){
        foreach($route as $routes){
            if(Route::currentRouteName() == $routes) return $output;
        }
    }
}
