<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Articles <?= $this->endSection('title') ?>

<?= $this->section('content') ?>
    
<h1>Articles</h1>

<a href="<?= url_to("new_article") ?>"> New</a>

<?php foreach($articles as $articles): ?>
    <article>
        <h2><a href='<?= site_url("/articles/".$articles->id) ?>'><?= $articles->title ?></a></h2>
        <p><?= $articles->content ?><p>
    </article>
<?php endforeach; ?>
<?= $this->endSection('content') ?>