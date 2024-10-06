<?php

    $router = new core\Router();

// GET routes
    $router->get('/', 'controllers/index.php');
    $router->get('/about', 'controllers/about.php');
    $router->get('/contact', 'controllers/contact.php');
    $router->get('/notes', 'controllers/notes/index.php');
    $router->get('/notes/create', 'controllers/notes/create.php');
    $router->get('/note', 'controllers/notes/show.php');
    $router->get('/note/edit', 'controllers/notes/edit.php');

    // POST routes
    $router->post('/notes', 'controllers/notes/store.php');

    // PUT/PATCH routes
    $router->patch('/note', 'controllers/notes/update.php');


    // DELETE routes
    $router->delete('/note', 'controllers/notes/destroy.php');

