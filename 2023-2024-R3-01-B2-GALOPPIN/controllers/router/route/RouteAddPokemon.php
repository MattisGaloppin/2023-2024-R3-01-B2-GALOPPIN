<?php
require_once("controllers/PokemonController.php");
require_once("controllers/router/Route.php");

class RouteAddPokemon extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []): void {
        $this->controller->displayAddPokemon();
    }

    public function post($params = []): void {
        try {
            $data = $_POST;
            $controler = new PokemonController();
            var_dump($data);
            $controler->addPokemon($data);
            $this->controller->displayAddPokemon();
        }
        catch(Exception $e){
            $errorMessage = $e->getMessage();
          //  $this->controller->displayAddPokemon($errorMessage);
        }

        $this->controller->displayAddPokemon();

        
    }
}
?>
