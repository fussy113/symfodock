<h2>スタッフリスト</h2>
<?php if(count($list)){ ?>
  <ul>

  <?php foreach ($list as $id => $staffData) { ?>
    <p><?php echo $id ?>人目</p>
    <li>
      <?php include_partial('Staff/detail',array('staff'=>$staffData,'staffId'=>$id, 'isNameLink'=> true)) ?>
    </li>
  <?php } ?>
  <?php /*
  <?php foreach ($list as $staff) { ?>
    <li>
      <?php echo link_to($staff->getName(), 'staff_detail',
                  array('staffId'=>$staff->getId())) ?>
    </li>
  <?php } ?>
  */ ?>
  </ul>
<?php } else { ?>
  スタッフ登録はございません
<?php } ?>
