<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Light Mode</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/' . check_color_mode() . '.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
</head>

<body>
    <nav class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-12 p-4">
                <h2>LIGHT MODE | DARK MODE</h2>
            </div>
            <div class="col-sm-6 col-12 p-4 text-end">
               <?php
                    $other_color_mode = check_color_mode() == 'light_mode' ? 'dark_mode' : 'light_mode';
               ?>
               <a href="<?= site_url('/main/set_color_mode/' . $other_color_mode) ?>">
                <img src="<?= base_url('assets/images/') . $other_color_mode . '.png'?>" alt="<?= $other_color_mode ?>" width="50">
               </a>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('content') ?>
</body>