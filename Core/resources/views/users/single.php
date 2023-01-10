<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>./resources/css/card_style.css">
</head>
<body>
    

<div class="container">
<div class="row d-flex justify-content-center align-items-center">
    <div class="card d-flex justify-content-center align-items-center" style="width: 18rem;">
        <div class="card-body">
            <p class="card-text"><strong>Display Name </strong>: <?= $data->user->display_name ?></p>
            <p class="card-text"><strong>Email </strong>: <?= $data->user->email ?></p>
            <p class="card-text"><strong> Username</strong> : <?= $data->user->username ?></p>
            <p class="card-text"><strong>Created at : </strong><?= $data->user->created_at ?></p>
            <p class="card-text"><strong>Updated at : </strong><?= $data->user->updated_at ?></p>

            <!-- <p class="card-text"><strong>Created at : </strong><?= $data->user->role ?></p> -->
            <div class="mt-5 d-flex flex-row-reverse gap-3">
            <a href="/users" class="btn btn-success">Back</a>
            <?php if (Core\Helpers\Helper::check_permission(['user:delete'])) : ?>
                <a href="/users/delete?id=<?= $data->user->id ?>" class="btn btn-danger" onclick="return confirm('Are You Sure Delete <?= $data->user->username ?>  ?')">Delete</a>
                <?php endif;
               if (Core\Helpers\Helper::check_permission(['user:update'])) : 
               ?>
                <a href="/users/edit?id=<?= $data->user->id ?>" class="btn btn-warning">Edit</a>
                <?php endif;?>
            </div>
        </div>
</div>
</div>
</div>
</body>
</html>

