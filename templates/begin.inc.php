<!DOCTYPE html>
<html lang="<?php echo config('language'); ?>">
    <head>
        <title><?php echo config('title') . " - " . documentTitle(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="<?php e(asset('css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" href="<?php e(asset('css/style.css')); ?>" />
    </head>
    <body>
        <div class="<?php echo config('container'); ?>">
            <?php include('navbar.inc.php'); ?>
                <div class="row">
                    <div class="col">