<?php
require_once("controllers/PokemonController.php");
require_once("controllers/router/Route.php");

class RouteAddType extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []): void {
        $this->controller->displayAddType();
    }

    public function post($params = []): void {

    }
}
?>
