<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/User.php';

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/../templates');
$smarty->setCompileDir(__DIR__ . '/../templates_c');
$smarty->setCacheDir(__DIR__ . '/../cache');
$smarty->setConfigDir(__DIR__ . '/../configs');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($username, $email, $password);
    $errors = [];

    if (!$user->validateUsername()) {
        $errors[] = "Username must be alphanumeric and between 3-20 characters.";
    }

    if (!$user->validateEmail()) {
        $errors[] = "Invalid email format.";
    }

    if (!$user->validatePassword()) {
        $errors[] = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.";
    }

    if (empty($errors)) {
        // In a real application, you would save the user to a database here
        $smarty->assign('success', 'Registration successful!');
        $smarty->assign('user', $user);
    } else {
        $smarty->assign('errors', $errors);
    }
}

$smarty->display('registration_form.tpl');