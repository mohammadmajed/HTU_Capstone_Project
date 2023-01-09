<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css"> 
        <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>./resources/css/styles.css">

</head>    
<body>    
    <?php if (!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
            <div class='alert alert-danger mb-3 ' role='alert'>
                <?= $_SESSION['error'] ?>
            </div>
        <?php
            $_SESSION['error'] = null;
        endif; ?>
    <div class="login">
    <h2 class="mb-4">Login Page</h2>
    <form class="text-center" method="POST" action="/authenticate">
        <label >
        <b >UserName</b>    
        </label>    
        <input type="text" id="admin-username" name="username" placeholder="Username">    
        <br><br>    
        <label >
        <b > Password</b>    
        </label>    
        <input type="Password" id="admin-password" name="password" placeholder="Password">    
        <br><br>    
        <input type="submit" name="log" id="log" value="Log In Here">       
        <br><br> 
        <span>
        <input type="checkbox" id="remember-me" name="remember_me">
        <label class="form-check-label" for="remember-me">Remember Me</label>
        </span>        
    </form>     
</div>    

</body>
</html>  