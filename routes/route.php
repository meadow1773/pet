<?php

namespace Routes;

use Routes\RouteSwitch;

class Route extends RouteSwitch
{
    public function run(string $requestUri)
    {
        $route = substr($requestUri, 1);

        if ($route == '') {
            $this->home();
        } else {
            $this->$route();
        }
    }
}
