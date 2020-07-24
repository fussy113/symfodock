
<?php /*
<h2><?php echo $staff->getName() ?></h2>
<p><?php echo $staff->getKana() ?></p>
<p><?php echo nl2br($staff->getComment()) ?></p>
<p>登録日<?php echo date('Y-n-j', strtotime($staff->getCreatedAt())) ?></p>
*/ ?>
<?php include_partial('Staff/detail',array('staff'=>$staffData,'staffId'=>$id)) ?>
