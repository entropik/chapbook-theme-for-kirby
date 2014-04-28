<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($page->metatitle()) ?> - <?php echo html($site->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body class="<?php echo html($site->backgroundcolor()) ?>	">
 
  <header>
    <h1><a href="<?php echo html(url())?>"><?php echo html($site->title()) ?></a></h1>
	<h2><?php echo html($site->description())?></h2>
  </header>