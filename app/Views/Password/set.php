<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Set Password <?= $this->endSection('title') ?>

<?= $this->section('content') ?>

<h1>Set Password</h1>
<?php if( session()->has("errors")): ?>
<ul>
<?php foreach(session("errors") as $error) :?>
    <li><?= $error ?></li>

 <?php endforeach; ?>
 </ul>
 
 <?php endif; ?>
<?= form_open() ?>

<label for="password">Password</label>
<input type="password" name='password' id='password' >

<label for="password_confirmation">Repeat Password</label>
<input type="password" name='password_confirmation' id='password_confirmation' >

<button>save</button>
</form>

<?= $this->endSection() ?>