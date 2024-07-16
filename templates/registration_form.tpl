<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    {if isset($errors)}
        <div style="color: red;">
            {foreach $errors as $error}
                <p>{$error}</p>
            {/foreach}
        </div>
    {/if}
    {if isset($success)}
        <div style="color: green;">
            <p>{$success}</p>
            <p>Username: {$user->getUsername()}</p>
            <p>Email: {$user->getEmail()}</p>
        </div>
    {else}
        <form action="index.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="Register">
        </form>
    {/if}
</body>
</html>