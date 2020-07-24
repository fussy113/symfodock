<div id="content">
  <h2><?php echo $page->getTitle() ?></h2>
  <p><?php echo nl2br($page->getRawValue()->getBody()) ?></p>
</div>
<div class="contentNav">
  <?php echo link_to('お知らせの一覧に戻る', 'news_list') ?>
</div>
<?php slot('breadcrumb') ?>
  <?php echo link_to('Symfony楽団ホームページ', 'homepage') ?>
  <?php echo link_to('お知らせ一覧', 'Page/NewsList') ?>
  <?php echo $page->getTitle() ?>
<?php end_slot() ?>
