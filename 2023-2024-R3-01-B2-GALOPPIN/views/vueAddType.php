<link rel="stylesheet" href="public/css/styles.css">
<div class="container mt-5">
        <h1 class="mb-4">Ajouter un Type</h1>
        <form action="process_add_type.php" method="post">
            <!-- Nom du type -->
            <div class="form-group">
                <label for="nomType">Nom du Type:</label>
                <input type="text" class="form-control" id="nomType" name="nomType" required>
            </div>

            <!-- Bouton d'envoi -->
            <button type="submit" class="btn btn-primary">Ajouter Type</button>
        </form>
    </div>