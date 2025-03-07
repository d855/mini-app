<?php
    
    use Core\Database;
    use Core\Validator;
    
    $config = require base_path('config.php');
    $db = new Database($config['database']);
    
    $heading = 'Create Note';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];
        
        if (! Validator::string($_POST['title'])) {
            $errors['title'] = 'Title is required';
        }
        
        if (! Validator::string($_POST['body'], 1, 100)) {
            $errors['body'] = 'A body of no more that 10 characters is requried';
        }
        
        if (empty($errors)) {
            $db->query('INSERT INTO notes(title, user_id, body) VALUES(:title, :user_id, :body)', [
                    'title' => $_POST['title'], 'user_id' => 1, 'body' => $_POST['body']
                ]);
            
            header('Location: /notes');
        }
    }
    
    view('notes/create', [
        'heading' => $heading,
    ]);