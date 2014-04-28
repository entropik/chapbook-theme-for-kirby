

<?php snippet('header') ?>
<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>

    <?php echo kirbytext($page->text()) ?>
	<?php 

	// get the first set of subpages which should be used
	$subpages = $pages->find('contents')->children();

	// create the snippet beginning with those subpages
	snippet('treemenu', array('subpages' => $subpages));

	?>
 
 </article>

	

</section>
<?php snippet('menu') ?>
<?php snippet('footer') ?>