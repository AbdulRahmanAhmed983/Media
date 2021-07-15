<?php 
template::Controller('HomeController');
template::Controller('RegisterController');
template::Controller('errorController');


class Router {
    protected $request;
    protected $responce;
    public $routes = [];
    public function get($path,$action) {
        $this->routes['get'][$path] = $action;
    }
    public function post($path,$action) {
        $this->routes['post'][$path] = $action;
    }
    public function getPath() {
        return strtolower($_SERVER['REQUEST_URI']);
    }
    public function getMethod() {
       return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function getRoutes() {
        return $this->routes;
    }
    public function resolve() {
        $method = $this->routes[$this->getMethod()][$this->getPath()] ?? 'error@e404';
        $exp = explode('@',$method);
        $callback = call_user_func_array([new $exp[0],$exp[1]],[]);
        echo '<pre>';
        print_r($this->getMethod());
        print_r($this->getPath());
        print_r($this->routes[$this->getMethod()]);
        print_r($callback);
       echo '</pre>';
        return $callback;
    }
}