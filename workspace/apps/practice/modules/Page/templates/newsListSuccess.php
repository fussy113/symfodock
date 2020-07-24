<h2>お知らせ一覧</h2>
<?php if(count($pageList)) { ?>
  <ul>
    <?php foreach ($pageList as $page) { ?>
      <li>
        <?php echo $page->getDateTimeObject('created_at')->format('m/d') ?>
        <?php echo link_to($page->getTitle(), 'news_show',
                    array('slug'=>$page->getSlug())) ?>
      </li>
    <?php } ?>
  </ul>
  <?php } else { ?>
    お知らせはありません
  <?php } ?>

<?php slot('breadcrumb') ?>
  <?php echo link_to('Symfony楽団ホームページ', 'homepage') ?>
  <?php echo 'お知らせ一覧' ?>
<?php end_slot() ?>
