<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from layout/messages.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'layout/messages.html', 8, false),array('modifier', 'escape', 'layout/messages.html', 9, false),)), $this); ?>
<?php if ($this->_tpl_vars['aMessageQueue']): ?>
<script type="text/javascript">
<!--

	$(window).load(function () <?php echo '{'; ?>

<?php $_from = $this->_tpl_vars['aMessageQueue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
		$('body').queueMessage(<?php echo '{'; ?>

			id: <?php echo ((is_array($_tmp=$this->_tpl_vars['message']['id'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
,
			text: '<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
', 
			location: '<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['location'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
			type: '<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
			timeout: <?php echo ((is_array($_tmp=$this->_tpl_vars['message']['timeout'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>

		});
<?php endforeach; endif; unset($_from); ?>
	});

//-->
</script>
<?php endif; ?>