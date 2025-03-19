<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Create Note';

view('notes/create', [
	'heading' => $heading,
	'errors' => []
]);