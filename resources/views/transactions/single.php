

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>./resources/css/card_style.css">
</head>
<body>

<div class="container text-left">
<div class="single">

<div class="row d-flex justify-content-center align-items-center">
    <div class="card d-flex justify-content-center align-items-center" style="width: 18rem;">

        <div class="card-body">
            
            <p class="card-text"><strong>Item ID </strong>: <?= htmlspecialchars($data->transactions->item_id) ?></p>
            <p class="card-text"><strong>Transactions ID </strong>:<?= htmlspecialchars ($data->transactions->id) ?></p>
            <p class="card-text"><strong> Quantity</strong> : <?= htmlspecialchars($data->transactions->quantity) ?></p>
            <p class="card-text"><strong>Total Price : </strong><?= htmlspecialchars($data->transactions->total) ?></p>            
            <p class="card-text"><strong>Created at : </strong><?= htmlspecialchars($data->transactions->created_at) ?></p>
            <p class="card-text"><strong>Updated at : </strong><?= htmlspecialchars($data->transactions->updated_at) ?></p>
            <div class="my-5 d-flex justify-content-end gap-3">
            <i class="fa-solid fa-angle-left"></i>
        </a>
        <a href="/transactions" class="btn btn-success">Back</a>
        <?php if (Core\Helpers\Helper::check_permission(['transaction:delete'])) : ?>
        <a href="/transactions/delete?id=<?= $data->transactions->id ?>" class="btn btn-danger" onclick="return confirm('Are You Sure Delete this transactions ?')">Delete</a>
        <?php endif;
        if (Core\Helpers\Helper::check_permission(['transaction:update'])) : 
            ?>
        <a href="/transactions/edit?id=<?= $data->transactions->id ?>" class="btn btn-warning">Edit</a>
        <?php endif;?>
    </div>



            
        </div>
</div>



</div>
</div>
               </div>
</body>
</html>