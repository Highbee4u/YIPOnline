<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../src/Database.php';

use Smarty\Smarty;


$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/../templates');
$smarty->setCompileDir(__DIR__ . '/../templates_c');

$database = new Database();
$db = $database->getConnection();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($username, $email, $password);
    $errors = [];

    if (!$user->validateUsername()) {
        $errors[] = "Username must be alphanumeric and between 3-20 characters.";
    } elseif ($user->usernameExists()) {
        $errors[] = "Username already exists. Please choose a different username.";
    }

    if (!$user->validateEmail()) {
        $errors[] = "Invalid email format.";
    } elseif ($user->emailExists()) {
        $errors[] = "Email already registered. Please use a different email address.";
    }

    if (!$user->validatePassword()) {
        $errors[] = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.";
    }

    if (empty($errors)) {
        try {
            if ($user->save($db)) {
                $smarty->assign('success', 'Registration successful!');
                $smarty->assign('user', $user);
            } else {
                $errors[] = "Failed to save user. Please try again.";
            }
        } catch (PDOException $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
    }

    if (!empty($errors)) {
        $smarty->assign('errors', $errors);
    }
}

$smarty->display('registration_form.tpl');