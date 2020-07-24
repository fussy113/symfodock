<h2><?php echo $shopDetail['title']?></h2>
<p><?php echo $shopDetail['phonetic']?></p>
<?php if(isset($shopDetail['pickup'])) { ?>
  <p>おすすめ</p>
<?php } ?>
<p>電話番号<?php echo $shopDetail['tel']?></p>
<ul>
  <?php if(isset($shopDetail['options'])) { ?>
    <?php foreach($shopDetail['options'] as $icon) { ?>
      <li><?php echo $icon?></li>
      <p><?php echo sgShop::$Options[$icon] ?></p>
    <?php } ?>
  <?php } ?>
</ul>
<figure>
    <?php echo image_tag('path/images/hoge'.$id.'jpg') ?>
</figure>
<h3><?php echo $shopDetail['name'].' '.$shopDetail['price'].'円' ?></h3>
<p><?php echo $shopDetail['description']?></p>
