<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from layout/scripts.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'layout/scripts.html', 16, false),)), $this); ?>

<script type="text/javascript">
<!--
    var validatorPreferences = <?php echo '{'; ?>

        'strFieldContainsErrors': "<?php echo ((is_array($_tmp=$this->_tpl_vars['strFieldContainsErrors'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
",
        'strFieldFixBeforeContinue1': "<?php echo ((is_array($_tmp=$this->_tpl_vars['strFieldFixBeforeContinue1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
",
        'strFieldFixBeforeContinue2': "<?php echo ((is_array($_tmp=$this->_tpl_vars['strFieldFixBeforeContinue2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
",
        'strWarningMissing': "<?php echo ((is_array($_tmp=$this->_tpl_vars['strWarningMissing'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
",
        'strWarningMissingOpening': "<?php echo ((is_array($_tmp=$this->_tpl_vars['strWarningMissingOpening'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
",
        'strWarningMissingClosing': "<?php echo ((is_array($_tmp=$this->_tpl_vars['strWarningMissingClosing'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
",
        'strSubmitAnyway': "<?php echo ((is_array($_tmp=$this->_tpl_vars['strSubmitAnyway'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
",
        'thousandsSeperator': "<?php echo $this->_tpl_vars['thousandsSeperator']; ?>
"
    };

	var tablePreferences = <?php echo '{'; ?>

		'warningBeforeDelete': <?php echo $this->_tpl_vars['warningBeforeDelete']; ?>

    };
//-->
</script>
<?php if ($this->_tpl_vars['combineAssets']): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['assetPath']; ?>
/min.php?g=<?php echo $this->_tpl_vars['jsGroup']; ?>
&amp;v=<?php echo $this->_tpl_vars['oxpVersion']; ?>
"></script>
<?php else: ?>
  <?php $_from = $this->_tpl_vars['aJsFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['javascript']):
?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['assetPath']; ?>
/<?php echo $this->_tpl_vars['javascript']; ?>
?v=<?php echo $this->_tpl_vars['oxpVersion']; ?>
"></script>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['aOtherJSFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['javascript']):
?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['javascript']; ?>
"></script>
<?php endforeach; endif; unset($_from); ?>

