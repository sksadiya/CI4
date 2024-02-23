<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> New Articles <?= $this->endSection('title') ?>

<?= $this->section('content') ?>

<h1>New Article</h1>
<?php if( session()->has("errors")): ?>
<ul>
<?php foreach(session("errors") as $error) :?>
    <li><?= $error ?></li>

 <?php endforeach; ?>
 </ul>
 
 <?php endif; ?>
<?= form_open("articles/create") ?>

<?= $this->include("Articles/form") ?>
</form>

<?= $this->endSection() ?>