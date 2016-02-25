<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from layout/styles.html */ ?>
<?php if ($this->_tpl_vars['combineAssets']): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['assetPath']; ?>
/min.php?g=<?php echo $this->_tpl_vars['cssGroup']; ?>
&amp;v=<?php echo $this->_tpl_vars['oxpVersion']; ?>
">
<?php else: ?>
  <?php $_from = $this->_tpl_vars['aCssFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stylesheet']):
?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['assetPath']; ?>
/<?php echo $this->_tpl_vars['stylesheet']; ?>
?v=<?php echo $this->_tpl_vars['oxpVersion']; ?>
">
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['aOtherCssFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stylesheet']):
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['stylesheet']; ?>
">
<?php endforeach; endif; unset($_from); ?>
