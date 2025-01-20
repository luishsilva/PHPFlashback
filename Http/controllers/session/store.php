<?php

use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

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

Session::flash('errors', $form->errors());

return redirect('/login');
