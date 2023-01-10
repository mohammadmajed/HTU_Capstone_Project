<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1 class="d-flex justify-content-center mb-4">All Items <?= $data->items_count ?></h1>
<?php if (Core\Helpers\Helper::check_permission(['item:create'])) : ?>
<a href="/items/create?id="  class="btn btn-outline-primary mb-3" id="item_create">Create Item</a>
<?php endif;?>


<div>
    <table class="table tabel-shadow">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data->items as $item) : ?>
                <tr class="table-light">
                    <td>
                        <div>
                            <div>
                                <p class="fw-bold"><?= $i++ ?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-bolder"><?= $item->name ?></p>
                    </td>

                    <td>$<?= $item->selling_price ?></td>
                    <td><?= $item->quantity ?></td>
                    <td class="ps-3">
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            <a href="./item?id=<?= $item->id; ?>" class="btn btn-warning text-center">Check Item</a>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
</div>


</body>
</html>

    