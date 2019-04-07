<div>
  <?php foreach ($pageList as $page) { ?>
    <h2>
      <?php echo $page->getTitle() ?>
    </h2>
    <p>
      <?php echo $page->getBody() ?>
    </p>

  <?php }?>
</div>
