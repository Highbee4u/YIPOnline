<?php
/* Smarty version 5.3.1, created on 2024-07-17 10:26:26
  from 'file:registration_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66978e42b5c525_17607301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '854f8bcb44c1e1aa74e40a6232514600f9f2121f' => 
    array (
      0 => 'registration_form.tpl',
      1 => 1721205437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66978e42b5c525_17607301 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\YIPOnline\\templates';
?><!DOCTYPE html>
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
                    
                    <?php if ((null !== ($_smarty_tpl->getValue('errors') ?? null))) {?>
                        <div class="alert alert-danger">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
                                <p class="mb-0"><?php echo $_smarty_tpl->getValue('error');?>
</p>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>

                    <?php if ((null !== ($_smarty_tpl->getValue('success') ?? null))) {?>
                        <div class="alert alert-success">
                            <p><?php echo $_smarty_tpl->getValue('success');?>
</p>
                            <p>Username: <?php echo $_smarty_tpl->getValue('user')->getUsername();?>
</p>
                            <p>Email: <?php echo $_smarty_tpl->getValue('user')->getEmail();?>
</p>
                        </div>
                    <?php } else { ?>
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
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
