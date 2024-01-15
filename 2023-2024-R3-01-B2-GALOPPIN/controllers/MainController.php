<?php
declare(strict_types=1);
require_once("views/View.php");
require_once("models/PokemonManager.php");
class MainController{
    public function displayIndex() : void {
        $indexView = new View('Index');
        $pokemonManager = new PokemonManager();
        $listPoke = $pokemonManager->getAll();
        $poke = $pokemonManager->getById(1);
        $noExist = $pokemonManager->getById(-1);
        $indexView->generer(['nomDresseur' => "Red", 'listPokemon' => $listPoke, 'first' => $poke, 'noEx' => $noExist]);
        
        
    }

}
