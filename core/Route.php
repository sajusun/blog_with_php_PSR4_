<?php

namespace Core;

class Route
{
    private static $routes = [];

    // Method to add a GET route
    public static function get($path, $action)
    {
        self::$routes['GET'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

    // Method to add a POST route
    public static function post($path, $action)
    {
        self::$routes['POST'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

    // Method to dispatch the route based on the current request URI
    public static function dispatch()
    {
        $url = trim($_GET['url'] ?? '/', '/');
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset(self::$routes[$method])) {
            foreach (self::$routes[$method] as $route) {
                $pattern = self::convertToPattern($route['path']);

                if (preg_match($pattern, $url, $matches)) {
                    array_shift($matches); // Remove the full match
                    return self::executeAction($route['action'], $matches);
                }
            }
        }

        // If no route matched, return 404
        http_response_code(404);
        //echo "404 Not Found";
        Controller::not_found();
        return false;

    }

    // Convert route path with parameters (e.g., /post/{id}) to regex
    private static function convertToPattern($path): string
    {
        //return "#^" . preg_replace('/\{(\w+)\}/', '(\w+)', trim($path, '/')) . "$#";
        return "#^" . preg_replace('/\{(\w+)}/', '(\w+)', trim($path, '/')) . "$#";
    }

    // Execute the controller action with parameters
    private static function executeAction($action, $params)
    {
        [$controller, $method] = explode('@', $action);
        $controller = "App\\Controllers\\$controller";

        if (class_exists($controller) && method_exists($controller, $method)) {
            return call_user_func_array([new $controller, $method], $params);
        } else {
            http_response_code(500);
            echo "Controller or Method Not Found";
            //Controller::not_found();

        }
        return false;
    }
}




