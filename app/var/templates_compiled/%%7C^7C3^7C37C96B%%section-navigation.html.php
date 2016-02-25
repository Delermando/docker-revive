<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from layout/section-navigation.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'layout/section-navigation.html', 23, false),array('function', 't', 'layout/section-navigation.html', 23, false),)), $this); ?>

<?php if (! empty ( $this->_tpl_vars['aSectionNav'] )): ?>
    <div id='thirdLevelNavigation'>
    <ul class='navigation'>
    <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['aSectionNav']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
      <?php if ($this->_tpl_vars['aSectionNav'][$this->_sections['n']['index']]['selected']): ?>
        <li class="active <?php if ($this->_sections['n']['first']): ?> first<?php endif; ?><?php if ($this->_sections['n']['last']): ?> last<?php endif; ?>">
      <?php else: ?>
        <li class="passive <?php if ($this->_sections['n']['first']): ?> first<?php else: ?><?php if ($this->_sections['n']['last']): ?> last<?php endif; ?><?php endif; ?><?php if ($this->_tpl_vars['aSectionNav'][$this->_sections['n']['index_prev']]['selected']): ?> after-active<?php endif; ?>">
      <?php endif; ?>
          <div class="left"><div class="right">
            <a href="<?php echo $this->_tpl_vars['adminBaseURL']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['aSectionNav'][$this->_sections['n']['index']]['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" accesskey="<?php echo OA_Admin_Template::_function_t(array('key' => 'Home'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['aSectionNav'][$this->_sections['n']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
          </div></div>
        </li>
    <?php endfor; endif; ?>
    </ul></div>
<?php endif; ?>

