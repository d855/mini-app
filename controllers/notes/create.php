<?php
    
    use Core\Database;
    use Core\Validator;
    
    $config = require base_path('config.php');
    $db = new Database($config['database']);
    
    $heading = 'Create Note';
    
    
    view('notes/create', [
        'heading' => $heading,
    ]);