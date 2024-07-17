<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">User Registration</h2>
                    
                    {if isset($errors)}
                        <div class="alert alert-danger">
                            {foreach $errors as $error}
                                <p class="mb-0">{$error}</p>
                            {/foreach}
                        </div>
                    {/if}

                    {if isset($success)}
                        <div class="alert alert-success">
                            <p>{$success}</p>
                            <p>Username: {$user->getUsername()}</p>
                            <p>Email: {$user->getEmail()}</p>
                        </div>
                    {else}
                        <form action="index.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    {/if}
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>