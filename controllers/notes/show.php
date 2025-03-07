<?php
    
    use Core\Database;
    
    $config = require base_path('config.php');
	
	$db = new Database($config['database']);
	
	$heading = 'Note';
    
	$userId = 1;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();
        
        authorize($note['user_id'] === $userId);
        
        $db->query('delete from notes where id = :id', ['id' => $_POST['id']]);
        
        header('Location: /notes');
        
        exit;
    } else {
        $note = $db->query(
            "select * from notes where id = :id",
            ['id' => $_GET['id']]
        )->findOrFail();
        
        authorize($note['user_id'] === $userId);
        
        view('notes/show', [
            'heading' => $heading,
            'note' => $note
        ]);   
    }