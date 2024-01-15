<?php
require_once("views/View.php");

class PokemonController {
    public function displayAddPokemon(?string $mess=null) {
        $view = new View('AddPokemon');
        $view->generer(['mess' => $mess]);
    }
    public function displayAddType(){
        $view = new View('AddType');
        $view->generer([]);
    }
    public function displaySearch(){
        $view = new View('Search');
        $view->generer([]);
    }
    public function displayDel(){
        $view = new View('del');
        $view->generer([]);
    }
    public function addPokemon(array $infPoke){
        $mp = new PokemonManager();
    
            $pokemon = new Pokemon();
            $pokemon->setNomEspece($infPoke['nomEspece']);
            $pokemon->setDescription($infPoke['description']);
            $pokemon->setTypeOne($infPoke['typeOne']);
            $pokemon->setTypeTwo($infPoke['typeTwo']);
            $pokemon->setUrlImg($infPoke['urlImg']);
    
            $poke = $mp->createPokemon($pokemon);
            $mess = "Erreur lors de la création du Pokémon. Veuillez réessayer!";
            if ($poke !== null) {
                $mess = 'Le Pokémon a été créé avec succès.';
            }

    }
    public function deletePokemonAndIndex(int $idPokemon){
        $mp = new PokemonManager();
        $success = $mp->deletePokemon($idPokemon);
    
        // Message à afficher
        if ($success){
            $mess =  'Le Pokémon a été supprimé avec succès.' ;
        }
        else {
            $mess = 'Erreur lors de la suppression du Pokémon. Veuillez réessayer!';
        }
        $mc = new MainController();
        $mc->displayIndex($mess);
    }
}

?>