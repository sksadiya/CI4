<label for="title">Title</label>
<input type="text" name='title' id='title' value="<?= old('title',$article->title)?>">
<label for="content">Content</label>
<textarea  name='content' id='content'><?= old("content", $article->content) ?></textarea>

<button>save</button>