<?php snippet('header') ?>
<section class="content">

  <article>

    <h1><?php echo html($page->title()) ?></h1>

    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<div class="next_section"><?php snippet('readmore'); ?></div>

<?php snippet('menu') ?>

<?php snippet('footer') ?>