<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php 
        $greeting = "Hi,";
        $personName = "Luis";
        $hasBookBeenRead = false;

        $message = $hasBookBeenRead ? 'you\'ve read the book.' : 'you\'ve not read the book.';
    ?>

    <h1>
        <?= $message?>  
    </h1>

    <h2>Arrays</h2>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?=$book['name']?>">
                    <?=$book['name']?>
                </a>
                <span>
                    by:
                    <?=$book['author']?>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Accessing arrays indexes</h2>
    <?=$books[0]['name'];?>

    <h2>Functions and Filters</h2>

</body>
</html>