<?php
abstract class Model {
    private $db;

    protected function execRequest(string $sql, array $params = null): \PDOStatement|bool {
        $db = $this->getDB();

        try {
            $stmt = $db->prepare($sql);

            if ($params !== null) {
                foreach ($params as $key => $value) {
                    // remplace ? par la valeur des parametres
                    $stmt->bindValue($key + 1, $value);
                }
            }

            $stmt->execute();
            return $stmt;
        }
        //si la requete ne fonctionne pas retrourner false
         catch (\PDOException $e) {
            
            error_log("Erreur d'exécution de la requête : " . $e->getMessage());
            return false;
        }
    }

    public function getDB(): \PDO {
        if ($this->db === null) {
            try {
                $this->db = new \PDO(
                    'mysql:host=localhost;dbname=grp-448_s3_progweb',
                    'grp-448',
                    'rQ7dUUQI',
                    [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                    ]
                );
            } catch (\Exception $e) {
                // Handle exceptions or log errors
                die('Erreur : ' . $e->getMessage());
            }
        }

        return $this->db;
    }
}
?>
