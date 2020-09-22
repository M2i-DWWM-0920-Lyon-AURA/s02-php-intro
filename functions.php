<?php
    $fruits = ['Banane', 'Pomme', 'Orange'];
    $numbers = [27, 35, 49];

    // Cette fonction permet d'ajouter un élément à la fin d'un tableau (comme array_push)
    // mais seulement si cet élément n'était pas déjà présent dans ce tableau
    // - $array: le tableau à manipuler
    // - $item: l'élément à rajouter
    function array_push_unless_present(array $array, $item): array {
        // Si l'élément n'est pas présent dans le tableau
        if (!in_array($item, $array)) {
            // Ajoute l'élément à la fin du tableau
            array_push($array, $item);
        }
        // Renvoie le tableau
        return $array;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Le tableau $fruits contient actuellement:
        <pre>
            <code>
<?php print_r($fruits) ?>
            </code>
        </pre>
    </p>

    <p>
        A ce stade, la commande <code>in_array('Ananas', $fruits)</code> renvoie:
        <pre>
            <code>
<?php
    $result = in_array('Ananas', $fruits);
    var_dump($result);
?>
            </code>
        </pre>
    </p>

    <p>
        Après avoir exécuté la commande <code>array_push_unless_present($fruits, 'Ananas');</code>, le tableau $fruits contient:
        <pre>
            <code>
<?php
    $fruits = array_push_unless_present($fruits, 'Ananas');
    print_r($fruits);
?>
            </code>
        </pre>
    </p>

    <p>
        A ce stade, la commande <code>in_array('Ananas', $fruits)</code> renvoie:
        <pre>
            <code>
<?php
    $result = in_array('Ananas', $fruits);
    var_dump($result);
?>
            </code>
        </pre>
    </p>

    <p>
        Après avoir exécuté la commande <code>array_push_unless_present($fruits, 'Ananas');</code>, le tableau $fruits contient:
        <pre>
            <code>
<?php
    $fruits = array_push_unless_present($fruits, 'Ananas');
    print_r($fruits);
?>
            </code>
        </pre>
    </p>

    <p>
        A ce stade, la commande <code>join(', ', $fruits)</code> renvoie:
        <pre>
            <code>
<?php
    $result = join(', ', $fruits);
    print_r($result);
?>
            </code>
        </pre>
    </p>
</body>
</html>