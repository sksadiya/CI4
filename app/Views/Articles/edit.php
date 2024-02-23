<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> New Articles <?= $this->endSection('title') ?>

<?= $this->section('content') ?>

<h1>Edit Article</h1>
<?php if( session()->has("errors")): ?>
<ul>
<?php foreach(session("errors") as $error) :?>
    <li><?= $error ?></li>

 <?php endforeach; ?>
 </ul>
 
 <?php endif; ?>
<?= form_open("articles/update/" .$article->id) ?>

<label for="title">Title</label>
<input type="text" name='title' id='title' value="<?= old('title',$article->title)?>">
<label for="content">Content</label>
<textarea  name='content' id='content'><?= old("content", $article->content) ?></textarea>

<button>save</button>
</form>

<?= $this->endSection() ?>