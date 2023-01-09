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
<h1>Edit Items</h1>

<form action="/items/update" method="POST" class="w-50 m-auto">
    <input type="hidden" name="id" value="<?= $data->item->id ?>">
    <div class="mb-3 mt-5 text-start">
        <label for="item-title" class="form-label">item Title</label>
        <input type="text" class="form-control" id="item-title" name="name" value="<?= $data->item->name ?>">
    </div>
   
    
    <div class="mb-3 text-start">
        <label for="Sellingprice" class="form-label">Selling Price</label>
        <input type="number" min="0" max="2000" class="form-control" id="Sellingprice" name="selling_price" value="<?= $data->item->selling_price ?>">
    </div>

    <div class="mb-3 text-start">
        <label for="cost_price" class="form-label">CostPrice</label>
        <input type="number" min="0" max="1000" class="form-control" id="cost_price" name="cost_price" value="<?= $data->item->cost_price ?>">
    </div>

    <div class="mb-3 text-start">
        <label for="total_number" class="form-label">Stock Available Quantity</label>
        <input type="number" min="0" max="1000" class="form-control" id="total_number" name="quantity" value="<?= $data->item->quantity ?>">
    </div>

    <button type="submit" class="btn btn-warning mt-4">Update</button>
    <a href="/item?id=<?= $data->item->id ?>" class="btn btn-danger ms-3 mt-4">Cancel</a>
</form>

</body>
</html>