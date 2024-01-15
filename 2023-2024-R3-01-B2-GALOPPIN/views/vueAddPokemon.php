<link rel="stylesheet" href="public/css/styles.css">
<?php
// Votre code HTML existant ici
?>

<?php if (isset($message)): ?>
    <div class="alert alert-danger">
        <?php echo $message; ?>
    </div>
<?php endif; ?>
<div class="container">
    <h1 class="mb-4">Ajouter un Pokémon</h1>
            <form action="index.php?action=add-pokemon" method="post">
                <!-- Nom de l'espèce -->
                <div class="form-group">
                    <label for="nomEspece">Nom de l'espèce:</label>
                    <input type="text" class="form-control" id="nomEspece" name="nomEspece" required>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <!-- Type One -->
                <div class="form-group">
                    <label for="typeOne">Type One:</label>
                    <input type="text" class="form-control" id="typeOne" name="typeOne" required>
                </div>

                <!-- Type Two -->
                <div class="form-group">
                    <label for="typeTwo">Type Two:</label>
                    <input type="text" class="form-control" id="typeTwo" name="typeTwo">
                </div>

                <!-- URL de l'image -->
                <div class="form-group">
                    <label for="urlImg">URL de l'image:</label>
                    <input type="text" class="form-control" id="urlImg" name="urlImg" required>
                </div>

                <!-- Bouton d'envoi -->
                <button type="submit" class="btn btn-primary">Ajouter Pokémon</button>
            </form>
</div>