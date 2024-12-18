<?php
$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Create Note';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) 
{ 
    $errors = [];

    $body = trim($_POST['body']);

    if(strlen($body) === 0) {
        $errors['body'] = 'A body is required';
    }

    if(strlen($body) > 1000) {
        $errors['body'] = 'The body can not be more than 1,000 characters';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
            'body'=> $body,
            'user_id'=> 1
        ]);
    }
}

require('views/create-notes.view.php');
