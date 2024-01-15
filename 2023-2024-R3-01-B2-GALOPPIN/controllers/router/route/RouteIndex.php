<?php
require_once("controllers/MainController.php");
require_once("controllers/router/Route.php");

class RouteIndex extends Route {
    private MainController $controller;

    public function __construct(MainController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []): void {
        $this->controller->displayIndex();
    }

    public function post($params = []): void {
        $this->controller->displayIndex();
    }
}
?>
