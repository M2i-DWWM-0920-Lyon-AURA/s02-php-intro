<?php
    $fruits = ['Banane', 'Pomme', 'Orange'];
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
        Après avoir exécuté la commande <code>array_push($fruits, 'Ananas');</code>, le tableau $fruits contient:
        <pre>
            <code>
<?php
    array_push($fruits, 'Ananas');
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
</body>
</html>