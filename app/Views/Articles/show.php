<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Articles <?= $this->endSection('title') ?>

<?= $this->section('content') ?>


        <h2><?= $article->title ?></h2>    
        <p><?= $article->content ?><p>
        <a href="<?= url_to("Articles::edit" , $article->id) ?>"> Edit</a> 
        <a href="<?= url_to("Articles::delete" , $article->id) ?>"> Delete</a> 
<?= $this->endSection() ?>