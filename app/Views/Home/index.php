<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Home <?= $this->endSection('title') ?>

<?= $this->section('content') ?>
   
<h1>welcome</h1>

<?php if(auth()->loggedIn()): ?>

    <p>Hello <?= auth()->user()->first_name?></p>
    <a href="<?= url_to("logout") ?>">Log Out</a>

    <?php else: ?>

    <a href="<?= url_to("login") ?>">Log in</a>

    <?php endif ?>
    
<?= $this->endSection('content') ?>
