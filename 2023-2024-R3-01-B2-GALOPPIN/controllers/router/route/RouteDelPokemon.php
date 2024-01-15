<?php
require_once("controllers/PokemonController.php");
require_once("controllers/router/Route.php");

class RouteDelPokemon extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []): void {
        $this->controller->displayDel();
    }

    public function post($params = []): void {
        try {
            $data = $_POST;
            $controler = new PokemonController();
            $controler->deletePokemonAndIndex($data[]);
        }
        catch(Exception $e){
            $errorMessage = $e->getMessage();
        } 
    }
}
?>
