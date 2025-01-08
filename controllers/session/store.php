<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) { 
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid email address.';
}

if (!empty($errors)) { 
    return view('session/create.view.app', [
        'errors'=> $errors
    ]);  
}

$user = $db->query('SELECT * from users where email = :email', [
    'email' => $email
])->find();

if (!$user) {
    if (password_verify($password, $user['password'])) {
        login(['email' => $email]);
        header('location: /');
        exit();
    }
}

return view('session/create.view.php',[
    'errors'=> [
        'email'=> 'No Matching account for this email address or password.'
    ]
]);