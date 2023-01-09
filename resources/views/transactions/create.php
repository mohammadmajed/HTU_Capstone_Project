<?php
use Core\Model\Item;
use Core\Model\Transaction;
?>
<div class="d-flex justify-content-between">
        <h1>POS App</h1>
        <div>
            <strong>Total Sales</strong>
            <span id="total-sales">0</span>
        </div>
    </div>
    <hr>

    <form id="userInputContainer" class="my-4 d-flex justify-content-between">

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Items</span>
            <select class="form-select" id="validationDefault04"  required>
            
                
      <option selected disabled value="<?=$item_id?>">Select One Of The Items</option>
      <option> <?php 
            foreach ($data->items as $item) : ?>
                <option value="<?=$item->id?>"><?=$item->name?></option>
                <a href="/transaction/delete?id=<?= $data->transaction->id ?>" class="btn btn-danger" onclick="return confirm('Are You Sure Delete <?= $data->transaction->id ?>  ?')">Delete</a>
                <a href="/transaction/edit?id=<?= $data->transaction->id ?>" class="btn btn-warning">Edit</a>
                
                <?php endforeach; ?> 

    </select>
 
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Quantity</span>
            <input id="quantity" type="number" class="form-control quantity" aria-describedby="addon-wrapping" min="0">
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Price (JOD)</span>
            <input id="total_price" name="selling_price" type="number" class="form-control" aria-describedby="addon-wrapping" min="0">
            </div>
        <input id="total" type="hidden" name="total">
        <button id="add" class="btn btn-success add_item">Add</button>
        
    </form>





<table class="table table-hover">
    <thead>
        <tr >
            
            <th scope="col">#</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Item ID</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col">Actions</th>
           
        </tr>

    </thead>
    <tbody>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script src="app.js"></script>

            </div>