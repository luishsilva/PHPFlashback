<?php
require('functions.php');
require('Database.php');
// require('router.php');

$db = new Database;
$posts = $db->query('select title from posts')->fetchAll(PDO::FETCH_ASSOC);


foreach ($posts as $post) {
    echo "<li>" .$post['title']."</li>";
}