<?php

// Assume password was put in a form and sent to server

$dbPassword = password_hash('banana', PASSWORD_DEFAULT);

// Store $dbPassword (the hash of the actual password) in a database.

// Check the password - pretend user is logging in.

// Missing step where you get the hashed password from the database

$correct = password_verify('apple', $dbPassword);

var_dump($correct);