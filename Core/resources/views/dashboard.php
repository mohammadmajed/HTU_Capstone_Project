<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['HTTP_HOST'] ?>./resources/css/card_style.css">
    </head>

<body>
    
<?php
use Core\Helpers\Helper; ?>
<div class="all">
<h2 class="text-center">All Pages</h2>
<hr class="w-50 m-auto mb-4"></hr>
<div class="row g-5">
    <div class="col-lg-4 col-md-6">
        <div class="card card-1">
            <div class="card-body">
                <h5 class="card-title text-center ">Total Users</h5>
                <div class="text-center">
                    <a href="/users">
                        <i class="icon-cog fa-solid fa-users fa-2x mb-2"></i> </a>
                    <p class="card-text paragrahp"><strong><?= $data->users_count ?></strong></p>
                    <a class=" btn btn-warning " aria-current="page" href="/users">Go To Page</a>

                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-1">
            <div class="card-body">
                <h5 class="card-title text-center">Total Items</h5>
                <div class="text-center">
                        <i class="icon-cog fa-solid fa-layer-group fa-2x mb-2 mt-3"></i> </a>
                    <p class="card-text paragrahp"><strong><?= $data->items_count ?></strong></p>
                    <a class=" btn btn-warning" aria-current="page" href="/items">Go To Page</a>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-1">
            <div class="card-body">
                <h5 class="card-title text-center">Top Items</h5>
                <div class="text-center">
                    <a href="/item/top">
                        <i class="icon-cog fa-solid fa-dollar-sign fa-2x mb-2 mt-3"></i> </a>
                    <p class="card-text paragrahp"><strong>5</strong></p>
                    <a class=" btn btn-warning " aria-current="page" href="/items/top">Go To Page</a>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="card card-1">
            <div class="card-body">
                <h5 class="card-title text-center">Total Sales</h5>
                <div class="text-center">
                        <i class="icon-cog fa-solid fa-store fa-2x mb-2 mt-3"></i></a>
                        <p class="card-text paragrahp ves">.</p>
                    <p class="card-text paragrahp">$ <strong><?= $data->total_sales ?></strong></p>


                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
        <div class="card card-1">
            <div class="card-body">
                <h5 class="card-title text-center">Selling Dashboard</h5>
                <div class="text-center">
                        <i class="icon-cog fa-solid fa-layer-group fa-2x mb-2 mt-3"></i> </a>
                    <p class="card-text paragrahp ves">.</p>
                    <a class=" btn btn-warning " aria-current="page" href="/transactions/create">Go To Page</a>



                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-1">
            <div class="card-body">
                <h5 class="card-title text-center">Total Transaction</h5>
                <div class="text-center">
                        <i class="icon-cog fa-solid fa-layer-group fa-2x mb-2 mt-3"></i> </a>
                        <p class="card-text paragrahp"><strong><?= $data->transaction_count ?></strong></p>
                    <a class=" btn btn-warning " aria-current="page" href="/transactions">Go To Page</a>


                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>




