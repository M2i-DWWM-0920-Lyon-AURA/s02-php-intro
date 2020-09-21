<?php
    // String (chaîne de caractères)
    $name = 'Romain';
    // Integer (nombre entier)
    $age = 12;
    // Indexed Array (tableau indexé, à partir de 0)
    $shoppingList = ['Bananes', 'Lait', 'Papier toilette', 'Huile d\'olive vierge 100% extra'];
    // Associative Array (tableau associatif)
    $shoppingQuantities = [
        'Lait' => 6,
        'Huile d\'olive vierge 100% extra' => 18,
        'Papier toilette' => 4,
        'Bananes' => 5,
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>
<body>
    <!-- Cette balise  -->
    <?php
        // Ceci est du PHP
        echo 'Bonjour ' . $name;

        echo '<h1>Bonjour ' . $name . '</h1>';
    ?>

    <?php
        $name = 'Guillaume';
    ?>

    <h1><?php echo 'Bonjour ' . $name ?></h1>

    <div class="<?php
        if ($age >= 18) {
            echo 'legal';
        } else {
            echo 'underage';
        }
        ?>">
        <!-- // Si l'âge est supérieur ou égal à 18 -->
        <?php if ($age >= 18): ?>
            <!-- // Afficher "vous êtes majeur" -->
            <p>Vous êtes majeur</p>
        <!-- // Sinon -->
        <?php else: ?>
            <!-- // Afficher "vous êtes mineur" -->
            <p>Vous êtes mineur</p>
        <?php endif; ?>
    </div>


    <p>
        L'élément à l'index 2 dans le tableau $shoppingList est: <?php echo $shoppingList[2] ?>
    </p>
    <p>
        L'élément du tableau $shoppingQuantities associé à <?php echo $shoppingList[2] ?> est: <?php echo $shoppingQuantities[$shoppingList[2]] ?>
    </p>


    <h2>Ma liste de courses</h2>
    <ul>
        <?php
            // Pour chaque élément contenu dans shoppingList
            foreach ($shoppingList as $shoppingItem) {
                // Générer une balise li contenant l'élément
                echo '<li class="example">' . $shoppingItem . '</li>';
            }
        ?>
    </ul>

    <h2>Ma liste de courses</h2>
    <ul>
        <!-- Pour chaque élément contenu dans shoppingList -->
        <?php foreach ($shoppingList as $shoppingItem): ?>
            <!-- Générer une balise li contenant l'élément -->
            <li class="example"><?= $shoppingItem ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
