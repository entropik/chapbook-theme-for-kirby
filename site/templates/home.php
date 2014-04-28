<?php snippet('homeheader') ?>
<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
	<?php $image = $page->images()->find('01.jpg') ?>
	<img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /> 
	<p><?php echo $image->caption() ?></p>
    <?php echo kirbytext($page->text()) ?>
  </article>

<?php

//$featured = $pages->find('contents')->children()->shuffle()->first();
// this will return the first random project
// and we can now get the title or any other data
$featured = $pages->find('contents')->children()->first();

?>
Start reading: <a href="<?php echo $featured->url()?>"><?php echo $featured->title() ?></a>

</section>
<?php snippet('menu') ?>

<?php snippet('footer') ?>