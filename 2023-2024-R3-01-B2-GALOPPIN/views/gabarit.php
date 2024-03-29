<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="public/css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- liens css et boostrap -->
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?= $titre ?></title>
</head>
<body>
    <header>
        <!-- Menu -->
        <nav>
            <?php include 'menu.php'; ?>
        </nav>
    </header>

    <!-- #contenu -->
    <main id="contenu">
        <?= $contenu ?>
    </main>

    <footer>

    </footer>
</body>
</html>