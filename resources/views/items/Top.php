<h1 class="d-flex justify-content-center mb-5">Top Items</h1>
<div>
    <table class="table ">
        <thead class="table-dark">
            <tr>
                <th >#</th>
                <th >Name</th>
                <th >Cost Price</th>
                <th >Selling Price</th>
                <th >Quantity</th>
                
            </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
            <?php foreach ($data->items as $item) : ?>
                <tr class=" table-light">
                    <td class="fw-bold"><?= $i++ ?></td>
                    <td ><?= $item->name ?></td>
                    <td >$<?= $item->cost_price ?></td>
                    <td class="fw-bold">$<?= $item->selling_price ?></td>
                    <td ><?= $item->quantity ?></td>
                </tr>
                
            <?php endforeach; ?>
                
        </tbody>
    </table>
</div>