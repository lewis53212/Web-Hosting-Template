<?php
session_start();
include 'db.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    $users = getUsers();
    if (isset($users[$username])) {
        $message = "Username already exists!";
    } else {
        // Hash password
        $hash = password_hash($password, PASSWORD_DEFAULT);
        saveUser($username, $hash);
        $message = "Account created! You can log in now.";
    }
}
?>

<form method="post">
    <h2>Register</h2>
    <input name="username" placeholder="Username" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>

<p><?php echo $message; ?></p>
<a href="login.php">Login</a>
