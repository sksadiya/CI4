<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Articles <?= $this->endSection('title') ?>

<?= $this->section('content') ?>

<h1> Delete Article</h1>

<p>Are You Sure?</p>
<?= form_open("articles/delete/". $article->id) ?>
<input type="hidden" name="_method" value="delete">
<button>Yes</button>
</form>

<?= $this->endSection() ?>