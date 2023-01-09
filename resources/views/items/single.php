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
<h1 class="text-center mb-5"><?= htmlspecialchars($data->item->name) ?></h1>

<div class="row d-flex justify-content-center align-items-center">
    <div class="card d-flex justify-content-center align-items-center" style="width: 18rem;">

        <div class="card-body">
            
            <p class="card-text"><strong>Item ID </strong>:<?= htmlspecialchars ($data->item->id) ?></p>
            <p class="card-text"><strong> Quantity</strong> : <?= htmlspecialchars($data->item->quantity) ?></p>
            <p class="card-text"><strong>Selling Price: </strong><?= htmlspecialchars($data->item->selling_price) ?></p>
            <p class="card-text"><strong>Cost Price: </strong><?= htmlspecialchars($data->item->cost_price) ?></p>
            <p class="card-text"><strong>Created at : </strong><?= htmlspecialchars($data->item->created_at) ?></p>
            <p class="card-text"><strong>Updated at : </strong><?= htmlspecialchars($data->item->updated_at) ?></p>
            
            <div class="my-5 d-flex justify-content-end gap-3">
            <i class="fa-solid fa-angle-left"></i>
        </a>
        <a href="/items" class="btn btn-success">Back</a>
            <?php if (Core\Helpers\Helper::check_permission(['item:delete'])) : ?>
                <a href="/items/delete?id=<?= $data->item->id ?>" class="btn btn-danger" onclick="return confirm('Are You Sure Delete <?= $data->item->name ?>  ?')">Delete</a>
               <?php endif;
               if (Core\Helpers\Helper::check_permission(['item:update'])) : 
               ?>
                <a href="/items/edit?id=<?= $data->item->id ?>" class="btn btn-warning">Edit</a>
                <?php endif;?>
    </div>



            
        </div>
</div>



</div>
</div>
               </div>
</body>
</html>