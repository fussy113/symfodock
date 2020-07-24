<h3>お知らせ</h3>
<?php if(count($pageList)) { ?>
  <ul>
    <?php foreach ($pageList as $page){ ?>
      <li>
        <?php echo $page->getDateTimeObject('created_at')->format('m/d') ?>
        <?php echo link_to($page->getTitle(), 'news_show',
                    array('slug'=>$page->getSlug())) ?>
      </li>
    <?php }?>
  </ul>
<?php } else { ?>
  お知らせはありません
<?php } ?>
