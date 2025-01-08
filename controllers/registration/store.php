<?php

use Core\Database;
use Core\Validator;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];

if(!Validator::email($_POST['email'])) {
    $errors['email'] = 'Please provide a valid address';
}

if(!Validator::string($_POST['password'], 7, 255)) {
    $errors['password'] = 'Please provide a password with at least 7 characters';
}

if (!empty($errors)) { 
    return view('registration/create.view.php', [
        'errors'=> $errors
    ]);
}

$db = App::resolve((Database::class));

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email'=> $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    login([
        'email'=> $email
    ]);

    header('location: /');
    exit();
}