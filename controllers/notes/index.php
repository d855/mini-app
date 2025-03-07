<?php
	$config = require base_path('config.php');
	
	$db = new Database($config['database']);
	
	$name = 'My notes u';
	
	$notes = $db->query("select * from notes")->get();
    
    view('notes/index', [
        'heading' => $name,
        'notes' => $notes
    ]);