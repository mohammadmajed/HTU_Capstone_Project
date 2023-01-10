<h1 class="text-center mb-5 mt-5 outline">All Transactions (<?= $data->transactions_count ?>)</h1>
<?php if (Core\Helpers\Helper::check_permission(['user:create'])) : ?>
<a href="/transactions/create?id="  class="btn btn-outline-primary mb-3" id="transaction_create">Create Transaction</a>
<?php endif;?>
<table class="table tabel-shadow">
        <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Transaction ID</th>
      <th>Quantity</th>
      <th>Total</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $i = 1;

      
     foreach ($data->transactions as $transaction) : 
                  ?>
                  
                <tr class="table-light">
                <td>
                        <div>
                            <div>
                                <p class="fw-bolder"><?= $i++ ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="fw-bold"><?= $transaction->id ?></td>
                    <td><?= $transaction->quantity ?></td>
                    <td><?= $transaction->total ?></td>
                    <td><a href="./transaction?id=<?= $transaction->id ?>" class="btn btn-warning">Check Transaction</a></td>
                </tr>
            <?php endforeach; ?>
    </tr>
  </tbody>
</table>
</div>

