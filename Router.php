<?php
class Router {
    private $routes = [];

    public function add($route, $pathOrClosure) {
        $this->routes[$route] = $pathOrClosure;
    }

    public function dispatch() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        
        // Redirect specific URLs to root
        if ($uri === 'Views/Home/HomePage.php') {
            header("Location: /");
            exit;
        }

        if (array_key_exists($uri, $this->routes)) {
            if (is_callable($this->routes[$uri])) {
                call_user_func($this->routes[$uri]);
            } else {
                require $this->routes[$uri];
            }
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
