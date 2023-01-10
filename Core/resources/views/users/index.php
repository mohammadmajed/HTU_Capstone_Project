<h1 class="d-flex justify-content-center mb-5">Users List (<?= $data->users_count ?>)</h1>
<?php if (Core\Helpers\Helper::check_permission(['user:create'])) : ?>
<a href="/users/create?id="  class="btn btn-outline-primary mb-3" id="User_create">Create User</a>
<?php endif;?>
<table class="table tabel-shadow">
        <thead class="table-dark">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Username</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($data->users as $user) : ?>
                <tr class="table-light">
                    <td class="fw-bolder"><?= $user->display_name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->username ?></td>


                    <td><a href="./user?id=<?= $user->id ?>" class="btn btn-warning">Check User</a></td>
                </tr>
            <?php endforeach; ?>
    </tr>
  </tbody>
</table>
</div>