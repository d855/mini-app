<?php

$router->get('/', 'controllers/index.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/delete.php');
$router->post('/note', 'controllers/notes/store.php');
$router->get('/note/create', 'controllers/notes/create.php');


