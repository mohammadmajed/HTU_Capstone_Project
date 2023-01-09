</section>
<div class="container rounded bg-white mt-5 mb-5">
<form action="/user/update_profile" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data->info->id ?>">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?= $data->info->username ?>
            </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Information</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-1">
                        <label class="labels">UserName</label>
                        <input type="text" class="form-control" name="username" value="<?= $data->info->username ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Display Name</label>
                        <input type="text" class="form-control" name="display_name" value="<?= $data->info->display_name ?>">
                    </div>
                <div class="row mt-3 mb-2">
                    <div class="col-md-12 ">
                        <label class="labels">Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $data->info->email ?>">
                    <div class="col-md-12 mt-3">
                        <label class="labels">Current Password</label>
                        <input type="password" class="form-control" name="password" value="<?= $data->info->password ?>">
                    <div class="col-md-12 mt-3">
                        <label class="labels">New Password</label>
                        <input type="password" class="form-control" name="new-password">
                </div>
                <button type="submit" class="btn btn-warning mt-3">Update</button>
                                <a href="/user/profile?id=<?= $data->info->id ?>"><button type="button" class="btn btn-danger mt-3 ms-1">back</button></a>
                            </div>
        </div>
      
    </div>
</div>
</div>
</div>
</form>