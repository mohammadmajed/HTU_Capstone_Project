<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>./resources/css/card_style.css">
</head>
<body>
<section class="vh-150" style="font-family:monospace;">
  <div class="container py-5 h-150">
    <div class="row d-flex justify-content-center align-items-center h-150">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
            <img class="rounded-circle" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            </div>
            <h4 class="mb-2"><?= $data->user->username ?></h4>
            <p class="text-muted mb-4"><?= $data->user->display_name ?> <span class="mx-2">|</span> 
            <a href="#!"><?= $data->user->email ?></a></p>
                <a href="/users/edit_profile?id=<?= $data->user->id ?>">
                <button type="button" class="btn btn-warning">Edit</button></a>
                <a href="/dashboard"><button type="button" class="btn btn-success
                 ms-1">back</button></a>


            <div class="d-flex justify-content-evenly text-center mt-3 mb-2">
              <div>
              <p class="text-muted mb-0">Created At</p>
                <p class="mb-2 h5"><?= $data->user->created_at ?></p>
                
              </div>
              <div class="px-3">
              <p class="text-muted mb-0">Updated At</p>
                <p class="mb-2 h5"><?= $data->user->updated_at ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>