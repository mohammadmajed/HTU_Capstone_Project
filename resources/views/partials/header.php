<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS App</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
<?php if (isset($_SESSION['user'])) : ?>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="/dashboard">POS App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php endif; ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                            <a class="nav-link" href="/user/profile"> My Profile</a>
                        <a class="nav-link active" aria-current="page" href="/items">Stock Management</a>
                        <a class="nav-link active" aria-current="page" href="/items/top">Top 5</a>
                        <a class="nav-link active" aria-current="page" href="/">Transaction</a>
                        <a class="nav-link active" aria-current="page" href="/users">Users</a>
                        <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
                        </li>                 
                    <?php endif; ?>
                </ul>
               
            </div>
        </div>
    </nav>

    <div class="container my-5">
        