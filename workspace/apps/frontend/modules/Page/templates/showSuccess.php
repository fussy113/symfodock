<div id="content">
  <h2><?php echo $page->getTitle() ?></h2>
  <p><?php echo nl2br($page->getRawValue()->getBody()) ?></p>
</div>

<?php slot('breadcrumb') ?>
  <?php echo link_to('Symfony楽団ホームページ', 'homepage') ?>
  <?php if($sf_params->get('slug') != 'top') { ?>
    <?php echo $page->getTitle() ?>
  <?php } ?>
<?php end_slot() ?>
