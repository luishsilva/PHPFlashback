<?php
require('Validator.php');

$config = require('config.php');
$db = new Database($config['database']);

$errors[] = '';   

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) 
{
    if(!Validator::string($_POST['body'], 1,1000)) {
        $errors['body'] = 'A body of no more 1,000 characters is required';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
            'body'=> $_POST['body'],
            'user_id'=> 1
        ]);
        $errors['body'] = '';
        $_POST['body'] = '';
    }
}

require('views/notes/create.view.php');

view('notes/create.view.php', [
    'heading' => "Create Note",
    'notes' => $notes
]);
