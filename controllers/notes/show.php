<?php
	$config = require base_path('config.php');
	
	$db = new Database($config['database']);
	
	$heading = 'Note';
	
	$id = $_GET['id'];

	$userId = 1;
	
	$note = $db->query(
		"select * from notes where id = :id",
		['id' => $id]
	)->findOrFail();
    
	authorize($note['user_id'] === $userId);
    
    view('notes/show', [
        'heading' => $heading,
        'note' => $note
    ]);;