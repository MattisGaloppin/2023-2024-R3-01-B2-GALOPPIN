<?php
declare(strict_types=1);

require_once("controllers/MainController.php");
require_once("controllers/PokemonController.php");

//ajoute tous les fichiers contenu dans route
foreach(glob("controllers/router/route/*.php") as $file){
    require_once($file);
}

class Router {
    private array $routeList;
    private array $ctrlList;
    private string $action_key;

    public function __construct(string $name_of_action_key = "action") {
        $this->action_key = $name_of_action_key;
        $this->createControllerList();
        $this->createRouteList();
    }

    // Cree la liste des controleurs
    private function createControllerList(): void {
        $this->ctrlList["main"] = new MainController();
        $this->ctrlList["pokemon"] = new PokemonController();
        $this->ctrlList["type"] = new PokemonController();
        $this->ctrlList["searchP"] = new PokemonController();
        $this->ctrlList["pokemonD"] = new PokemonController();
    }

    // Crde la liste des routes
    private function createRouteList(): void {
        $this->routeList["index"] = new RouteIndex($this->ctrlList["main"]);
        $this->routeList["add-pokemon"] = new RouteAddPokemon($this->ctrlList["pokemon"]);
        $this->routeList["add-pokemon-type"] = new RouteAddType($this->ctrlList["type"]);
        $this->routeList["search"] = new RouteSearch($this->ctrlList["searchP"]);
        $this->routeList["del-pokemon"] = new RouteDelPokemon($this->ctrlList["pokemonD"]);
    }
    public function routing(array $get, array $post): void {
        if(empty($post)){
            if(isset($get['action'])){
                $this->routeList[$get['action']]->action();
            }
            else{
                $this->routeList['index']->action();
            }
        }
            
            else{
                $this->routeList[$get['action']]->action($post, 'POST');
            }
            var_dump($get);
        }
        
    }
    
?>
