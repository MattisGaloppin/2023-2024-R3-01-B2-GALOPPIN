<link rel="stylesheet" href="public/css/styles.css">
<div class="container mt-5">
        <h1 class="mb-4">Recherche Pokémon</h1>
        <form action="process_search.php" method="post">
            <!-- Champ texte pour la recherche -->
            <div class="form-group">
                <label for="recherche">Rechercher Pokémon:</label>
                <input type="text" class="form-control" id="recherche" name="recherche" required>
            </div>

            <div class="form-group">
                <label for="champRecherche">Choisir le champ de recherche:</label>
                <select class="form-control" id="champRecherche" name="champRecherche" required>
                    <option value="nomEspece">Nom de l'espèce</option>
                    <option value="description">Description</option>
                    <option value="typeOne">Type One</option>
                    <option value="typeTwo">Type Two</option>
                    <option value="urlImg">URL de l'image</option>
                </select>
            </div>

            <!-- Bouton d'envoi -->
            <button type="submit" class="btn btn-primary">Rechercher Pokémon</button>
        </form>
    </div>