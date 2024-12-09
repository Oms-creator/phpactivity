<?php
$username = 'Kows';
$password = 'Kows123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['password'] ?? '';

    switch (true) {
        case ($user === $username && $pass === $password):
            echo "You are logged in.";
            break;
        default:
            echo "Incorrect username or password.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="user" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
