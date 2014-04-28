<?php if($page->hasNextVisible()): ?>
Read more: <a href="<?php echo $page->nextVisible()->url() ?>"><?php echo $page->nextVisible()->title() ?></a>
<?php endif ?>