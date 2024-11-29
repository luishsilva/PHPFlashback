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

    <?php 
        $books = [
            [
                'name' => 'The Bible',
                'author' => 'Jesus',
                'purchaseUrl' => 'http://exempple.com'
            ],
            [
                'name' => 'Hidden Potential',
                'author' => 'Adam Grant',
                'purchaseUrl' => 'http://exempple.com'
            ],
            [
                'name' => 'Sabbath School Lesson',
                'author' => 'John Doe',
                'purchaseUrl' => 'http://exempple.com'
            ],       
            [
                'name' => 'Smart Kids',
                'author' => 'Mary Doe',
                'purchaseUrl' => 'http://exempple.com'
            ]
        ];
    ?>

    <h2>Arrays</h2>
    <ul>
        <?php foreach ($books as $book) : ?>
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
</body>
</html>