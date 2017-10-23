<?php


if (! function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param  string  $abstract
     * @param  array   $parameters
     * @return mixed|\Illuminate\Foundation\Application
     */
    function app($abstract = null, array $parameters = array())
    {
        if (is_null($abstract)) {
            return Container::getInstance();
        }
        return Container::getInstance()->make($abstract, $parameters);
    }
}