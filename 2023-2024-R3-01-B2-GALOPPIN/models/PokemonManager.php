<?php
declare(strict_types=1);
require_once('models/Model.php');  
require_once('models/Pokemon.php'); 
class PokemonManager extends Model {
    public function getAll(): array {
        $pokemons = array();
        $sql = 'SELECT * FROM pokemons_g';
        $stmt = $this->execRequest($sql);

        while ($donnees = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pokemon = new Pokemon();

            //on met les donnees a l'attribut pokemon
            $pokemon->setIdPokemon($donnees['idPokemon']);
            $pokemon->setNomEspece($donnees['nomEspece']);
            $pokemon->setDescription($donnees['description']);
            $pokemon->setTypeOne($donnees['typeOne']);
            $pokemon->setTypeTwo($donnees['typeTwo']);
            $pokemon->setUrlImg($donnees['urlImg']);

            // Ajout du pokemon au tableau
            $pokemons[] = $pokemon;
        }

        return $pokemons;
    }
    public function getByID(int $idPokemon): ?Pokemon {
        $poke = new Pokemon();
        $sql = 'SELECT * FROM pokemons_g WHERE idPokemon=?';
        $params = [$idPokemon];
        $stmt = $this->execRequest($sql, $params);
    
        // si la requete n est pas false
        if ($stmt !== false) {
            $donnees = $stmt->fetch(PDO::FETCH_ASSOC);
    
            //si un id est retourné
            if ($donnees !== false) {
                //on ajoute les valeurs au pokemon et on le retourne
                $poke->setIdPokemon($donnees['idPokemon']);
                $poke->setNomEspece($donnees['nomEspece']);
                $poke->setDescription($donnees['description']);
                $poke->setTypeOne($donnees['typeOne']);
                $poke->setTypeTwo($donnees['typeTwo']);
                $poke->setUrlImg($donnees['urlImg']);
                return $poke;
            }
        }
        //sinon on retourne null
        return null;
    
        
    }
    public function createPokemon(Pokemon $pokemon){
        $sql = "INSERT INTO pokemons_g (nomEspece, description, typeOne, typeTwo, urlImg) 
        VALUES (?, ?, ?, ?, ?)";
        //on recup les parametres du pokemon
        $params = [
            $pokemon->getNomEspece(),
            $pokemon->getDescription(),
            $pokemon->getTypeOne(),
            $pokemon->getTypeTwo(),
            $pokemon->getUrlImg(),
            ];
        $stmt = $this->execRequest($sql, $params);
        //si la requete a foncfionnee
        if ($stmt !== false) {

            $sql = 'SELECT LAST_INSERT_ID()';
            $stmt2 = $this->execRequest($sql);
            $donnee = $stmt2->fetch(PDO::FETCH_ASSOC);
    
            //si un id est retourné
            if ($donnee !== false) {
                //on ajoute les valeurs au pokemon et on le retourne
                $pokemon->setIdPokemon($donnee['LAST_INSERT_ID()']);

            }
        
    } 
    return $pokemon;
     
}
public function deletePokemon(int $idPokemon = -1){
      
        $sql = 'DELETE FROM pokemons_g WHERE idPokemon = ?';
        $params = [$idPokemon];
        $stmt = $this->execRequest($sql, $params);
    
}
}
?>