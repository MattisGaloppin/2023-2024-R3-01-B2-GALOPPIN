<link rel="stylesheet" href="public/css/styles.css">
<br>
<h1>Pokédex de <?= $nomDresseur ?></h1>
<br>
<?php if ($listPokemon): ?>
    <table class="tab">
        <thead class="tab">
            <tr>
                <th>ID</th>
                <th>Nom Espece</th>
                <th>Description</th>
                <th>Type One</th>
                <th>Type Two</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listPokemon as $pokemon): ?>
                <tr>
                    <td><?= $pokemon->getIdPokemon() ?></td>
                    <td><?= $pokemon->getNomEspece() ?></td>
                    <td><?= $pokemon->getDescription() ?></td>
                    <td><?= $pokemon->getTypeOne() ?></td>
                    <td><?= $pokemon->getTypeTwo() ?></td>
                    <td class="tdImg"><img src="<?= $pokemon->getUrlImg() ?>" alt="<?= $pokemon->getNomEspece() ?>"class="img_poke"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun Pokémon à afficher.</p>
<?php endif; ?>
