<?php
/**
 * Created by PhpStorm.
 * User: sahithvibudhi
 * Date: 26/10/17
 * Time: 8:18 PM
 */

class Router {

    const ALL = 0;
    const GET = 1;
    const POST = 2;

    private $routesList;
    private $middlewareList;
    private $endPoint;


    public function run()
    {
        $engine = new Engine();
        $engine->run($this->routesList, $this->middlewareList);
    }

    /**
     * @param $endPoint
     * @param $function
     */
    public function get($endPoint, $function)
    {
        $this->pushRoute($endPoint, ['function' => $function, 'type' => self::GET]);
        return $this;
    }

    public function post($endPoint, $function)
    {
        $this->pushRoute($endPoint, ['function' => $function, 'type' => self::POST]);
        return $this;
    }

    public function addRoute($endPoint, $function)
    {
        $this->pushRoute($endPoint, ['function' => $function, 'type' => self::ALL]);
        return $this;
    }

    public function middleware($function)
    {
        $this->pushMiddleware($function);
        return $this;
    }

    /*utility functions*/
    private function pushRoute($endpoint, $params)
    {
        $this->endPoint = $endpoint;
        $this->routesList[$endpoint] = $params;
    }

    private function pushMiddleware($function)
    {
        $this->middlewareList[] = $function;
    }

}