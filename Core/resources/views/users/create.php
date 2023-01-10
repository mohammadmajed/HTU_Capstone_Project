<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>./resources/css/card_style.css">
</head>
<body>
<div class="create text-center">
<h1>Create User</h1>

<form action="/users/store" method="POST" class="mx-auto">
    <div class="mb-4 mt-5 text-start">
        <input type="text" class="form-control" id="display-name" placeholder="Display Name" name="display_name">
    </div>
    <div class="mb-4 text-start">
        <input type="email" class="form-control" id="user-email" placeholder="Email" name="email">
    </div>
    <div class="mb-4 text-start">
        <input type="text" class="form-control" id="username-email" placeholder="Username" name="username">
    </div>
    <div class="mb-4 text-start">
        <input type="password" class="form-control" id="password-email" placeholder="Password" name="password">
    </div>
    <div class="mb-2 mt-0">
    <!-- <input type="file" class="form-control" name="photo" id=" item_photo"> -->
    </div>
    
    <button type="submit" class="btn btn-success mt-4">Create</button>
    <a href="/users" class="btn btn-danger ms-3 mt-4">Cancel</a>
</form>
</div>

</body>
</html>