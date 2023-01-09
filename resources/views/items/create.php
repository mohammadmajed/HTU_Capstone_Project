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
<h1 class="d-flex justify-content-center">Create Items</h1>
<form action="/items/store" method="POST" class="w-50 mx-auto mt-5">
<div class="mb-4 text-start">
        <input type="text" class="form-control" id="item_name" placeholder="Name" name="name">
    </div>
    <div class="mb-4 text-start">
        <input type="number" class="form-control" id="item_quantity" placeholder="Quantity" name="quantity">
    </div>
    <div class="mb-4 text-start">
        <input type="number" class="form-control" id="item_selling_price" placeholder="Selling Price" name="selling_price">
    </div>
    <div class="mb-4 text-start">
        <input type="number" class="form-control" id="item_cost_price" placeholder="Cost Price" name="cost_price">
    </div>
    <button type="submit" class="btn btn-success mt-4">Create</button>
    <a href="/items" class="btn btn-warning mt-4">Back</a>

    </div>

</form>
</body>
</html>