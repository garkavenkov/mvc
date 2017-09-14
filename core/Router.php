<?php

namespace core;

class Router
{
    /**
     * Default controller
     */
    private $defaultController = 'Home';

    /**
     * Default action
     */
    private $defaultAction = 'index';

    /**
     * Routes
     */
    private $routes = array(
        '/^(?<controller>[A-z]+)$/', // Controller
        '/^(?<controller>[A-z]+)\/(?<id>[\d]+)$/', // Controller/Id/{default_action}
        '/^(?<controller>[A-z]+)\/(?<action>[A-z-]+)$/', // Controller/Action
        '/^(?<controller>[A-z]+)\/(?<id>[\d]+)\/(?<action>[A-z]+)$/' // Controller/Id/action
    );

    private $params = [];

    /**
     * Dispatch to appropriate controller
     * @param  string $url URL
     */
    public function dispatch($url)
    {
        $this->match($url);
    }

    /**
     * [match description]
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    private function match($url)
    {
        $this->parseUrl($url);
        if (isset($this->params['controller']) && !is_null($this->params['controller'])) {
            $controller = $this->params['controller'];
        } else {
            $controller = $this->defaultController;
        }
        $controller = "app\\controllers\\" . ucfirst($controller);

        if (isset($this->params['action']) && !is_null($this->params['action'])) {
            $action = $this->params['action'];
        } else {
            $action = $this->defaultAction;
        }

        if (isset($this->params['id']) && !is_null($this->params['id'])) {
            $id = $this->params['id'];
        } else {
            $id = null;
        }

        if (class_exists($controller)) {
            $controllerObject = new $controller();
            $controllerObject->$action($id);
            // if (method_exists($controller_object, $action)) {
            //     $controller_object->$action($id);
            // } else {
            //     $controller_object->$action($id);
            //     // echo "Action '$action' not found";
            // }
        } else {
            echo "Controller '$controller' not found.<br>";
        }
    }

    private function parseUrl($url)
    {
        $this->params = [];

        // Get rid off leading and ending forward slashes
        $url = preg_replace('/^\//', '', $url);
        $url = preg_replace('/\/$/', '', $url);
        foreach ($this->routes as $route) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $value) {
                    if (is_string($key)) {
                        $this->params[$key] = $value;
                    }
                }
                return true;
            }
        }
        return false;
    }
}
