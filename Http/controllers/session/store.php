<?php

use Http\Forms\LoginForm;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        // redirect will exit the page so no need for a else statement here
        redirect('/');
    }
     
    $form->error('email', 'No Matching account for this email address or password.');
}

return view('session/create.view.app', [
    'errors'=> $form->errors()
]);
