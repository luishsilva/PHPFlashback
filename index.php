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
</body>
</html>