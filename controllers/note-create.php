<?php
$heading = 'Create Note';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) 
{ 
    dd($_POST);
}

require('views/create-notes.view.php');
