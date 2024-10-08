<?php

    use core\App;
    use core\Database;
    use core\Validator;

    $db = App::resolve(Database::class);
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "The note should be between 1 and 1000 characters long.";
    }

    if (!empty($errors)) {
        view("notes/create.view.php", ['heading' => 'Create Note', 'errors' => $errors]);
    }

    $db->query('INSERT INTO notes (user_id, body) VALUES (:user_id, :body)',
               [':user_id' => $_SESSION['user']['user_id'], ':body' => $_POST['body']]);
    redirect('/notes');

