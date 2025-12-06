<?php
// File: db.php
// Path to users storage
define("USER_FILE", "users.txt");

// Function to read all users
function getUsers() {
    if (!file_exists(USER_FILE)) {
        file_put_contents(USER_FILE, "");
    }
    $lines = file(USER_FILE, FILE_IGNORE_NEW_LINES);
    $users = [];
    foreach ($lines as $line) {
        list($username, $password) = explode(",", $line);
        $users[$username] = $password;
    }
    return $users;
}

// Function to save a user
function saveUser($username, $password) {
    file_put_contents(USER_FILE, "$username,$password\n", FILE_APPEND);
}
?>
