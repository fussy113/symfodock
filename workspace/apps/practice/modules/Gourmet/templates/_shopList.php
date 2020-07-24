<?php foreach($list as $key => $detail) { ?>
    <li>
      <p><?php echo $detail['hall'] ?></p>
      <h3>
        <?php echo link_to($detail['title'],'Gourmet/Detail?shopId='.$key)?>
        <span><?php echo $detail['phonetic'] ?></span>
      </h3>
    </li>
  <?php } ?>
