<!--
    Cette balise permet de délimiter du code PHP à l'intérieur du code HTML.

    A l'arrivée, il ne restera aucune trace du code PHP dans le rendu HTML.
    Le PHP aura été exécuté préalablement et aura généré (ou pas) du HTML.
-->
<?php
/*     
    Variables
    
    Lorsque l'on souhaite conserver une valeur que l'on est amené à réutiliser plus tard,
    on lui colle une "étiquette" dessus, c'est-à-dire un nom qui lui permet de l'identifier
    et de la retrouver.
*/

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
    <?php
        // La commande echo permet d'écrire dans le code HTML qui sera renvoyé par le serveur
        echo 'Bonjour ' . $name;

        // Cet exemple illustre le fait que la commande echo écrit du HTML tel quel,
        // il est donc possible d'écrire directement des balises
        echo '<h1>Bonjour ' . $name . '</h1>';
    ?>

    <?php
        // Si on redéfinit une variable, l'ancienne valeur est abandonnée au profit de la nouvelle
        $name = 'Guillaume';
    ?>

    <!-- Il est aussi possible d'écrire des blocs de PHP au milieu du code HTML -->
    <h1><?php echo 'Bonjour ' . $name ?></h1>


    <p>
        <!-- Pour retrouver un élément dans un tableau, on donne le nom du tableau et on met son index entre crochets -->
        L'élément à l'index 2 dans le tableau $shoppingList est: <?php echo $shoppingList[2] ?>
    </p>
    <p>
        <!-- Dans un tableau associatif, il faut mettre la clé entre crochets -->
        L'élément du tableau $shoppingQuantities associé à <?php echo $shoppingList[2] ?> est: <?php echo $shoppingQuantities[$shoppingList[2]] ?>
    </p>


<!-- 
    Conditions

    Les mots-clés if ... else (si ... sinon) permettent de définir des blocs d'instructions
    qui s'exécuteront uniquement si certaines conditions sont remplis (ou non)
 -->
    <div class="<?php
        // Si l'âge est supérieur ou égal à 18
        if ($age >= 18) {
            // Ecrire "legal" dans la classe de l'élément
            echo 'legal';
        // Sinon
        } else {
            // Ecrire "underage" dans la classe de l'élément
            echo 'underage';
        }
        ?>">

        <!-- Il est également possible d'utiliser la syntaxe suivante afin de soumettre
        des blocs de HTML entiers à une condition -->
        <?php if ($age >= 18): ?>
            <p>Vous êtes majeur</p>
        <?php else: ?>
            <p>Vous êtes mineur</p>
        <?php endif; ?>
    </div>

<!-- 
    Boucles

    Lorsque l'on a besoin d'exécuter une même série d'instructions pour chaque élément d'une liste,
    on peut utiliser le mot-clé foreach (pour chaque). Il faut lui donner le nom du tableau à parcourir,
    puis "as" et le nom d'une variable arbitraire, qui va avoir vocation à remplacer l'élément
    que le programme est en train de parcourir à chaque tour de boucle.

    Dans cet exemple, $shoppingItem adoptera successivement les valeurs de "Bananes", "Lait", "Papier toilette"...
    et le code à l'intérieur du bloc changera de comportement en fonction de cette valeur.
 -->
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

    <!-- Comme pour les conditions, il est possible d'utiliser cette syntaxe pour inclure des blocs
    entiers de HTML -->
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
