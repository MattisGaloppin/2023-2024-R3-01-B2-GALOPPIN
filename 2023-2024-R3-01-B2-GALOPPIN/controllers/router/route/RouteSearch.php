<?php
require_once("controllers/PokemonController.php");
require_once("controllers/router/Route.php");

class RouteSearch extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []): void {
        $this->controller->displaySearch();
    }

    public function post($params = []): void {
        
    }
}
?>
