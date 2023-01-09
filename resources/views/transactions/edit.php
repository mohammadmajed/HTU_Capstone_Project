<div class="container">
    <h1 class="text-center">Edit transaction</h1>
    <hr>

    <form class="w-50 mx-auto mt-5" method="POST" action="/transactions/update">
        <input type="hidden" name="id" value="<?= $data->transactions->id ?>">
        <div class="mb-3">
            <label for="transactionsquantity" class="form-label">Quantity:</label>
            <input type="number" name="quantity" class="form-control" id="quantity" value="<?= $data->transactions->quantity ?>">
        
        </div>


        <button type="submit" class="btn btn-warning">Update</button>

    <a href="/transaction?id=<?= $data->transactions->id ?>" class="btn btn-danger my-3">Cancel</a>
    </div>
</form>
