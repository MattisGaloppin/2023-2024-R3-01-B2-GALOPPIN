<?php
require_once("controllers/PokemonController.php");
require_once("controllers/router/Route.php");

class RouteDelPokemon extends Route {
    private PokemonController $controller;
    private MainController $main;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []): void {
        $mainC = new PokemonController();
        $road = new Route();
        var_dump($params);
        $mainC->deletePokemonAndIndex($params['idPokemon']);
        $this->main->displayIndex();
    }

    public function post($params = []):void{

    }


}
?>
