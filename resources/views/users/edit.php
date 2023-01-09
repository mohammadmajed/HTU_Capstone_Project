<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>./resources/css/card_style.css">
</head>
<body>
<div class="edit text-center"> 
<h1>Edit User</h1>

<form action="/users/update" method="POST" class="w-50 mx-auto">
    <input type="hidden" name="id" value="<?= $data->user->id ?>">
    <div class="mb-3 mt-5 text-start">
        <label for="display-name" class="form-label">Display Name</label>
        <input type="text" class="form-control" id="display-name" name="display_name" value="<?= $data->user->display_name ?>">
    </div>
    <div class="mb-3 text-start">
        <label for="user-email" class="form-label">Email</label>
        <input type="email" class="form-control" id="user-email" name="email" value="<?= $data->user->email ?>">
    </div>
    <div class="mb-3 text-start">
        <label for="user-username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username-email" name="username" value="<?= $data->user->username ?>">
    </div>
    <div class="mb-3 text-start">
        <label for="user-password" class="form-label">Password</label>
        <input type="password" class="form-control" id="user-password" name="password" value="<?= $data->user->password ?>">
    </div>
    <div class="mb-3 text-start">
        <label for="user-role" class="form-label">Role</label>
        <select class="form-select" aria-label="Role" name="role">
            <option value="admin">Admin</option>
            <option value="sellar">Sellar</option>
            <option value="accountant">Accountant</option>
            <option value="procurement">Procurement</option>
        </select>
    </div>
    <button type="submit" class="btn btn-warning mt-4">Update</button>
    <a href="/user?id=<?= $data->user->id ?>" class="btn btn-danger ms-3 mt-4">Cancel</a>

</form>
</div>

</body>
</html>