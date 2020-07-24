<?php // echo link_to($staff['name'], 'staff_detail',array('staffId'=>$staffId)) ?>

<?php /* パターン1
<?php $actionName = $sf_context->getActionName(); ?>
<?php if($actionName == 'Detail') { ?>
  <h2><?php echo $staff['name']?></h2>
<?php } else { ?>
  <?php echo link_to($staff['name'], 'Staff/Detail?staffId='.$staffId) ?>
<?php } ?>
*/ ?>
<?php if(isset($isNameLink)) {?>
  <?php echo link_to($staff['name'], 'Staff/Detail?staffId='.$staffId) ?>
<?php } else { ?>
  <p><?php echo $staff['name'] ?></p>
<?php } ?>
<p><?php echo $staff['kana'] ?></p>
<p><?php echo $staff['comment'] ?></p>
<ul>
  <?php foreach($staff['weekday'] as $key => $day){ ?>
    <li class="<?php echo $key % 2 ==0 ? 'red' : 'blue' ?>">
      <?php echo $key+1 ?>日目
      <?php echo $day ?>
    </li>
  <?php } ?>
</ul>
