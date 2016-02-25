<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from layout/content-header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'layout/content-header.html', 32, false),array('modifier', 'count', 'layout/content-header.html', 37, false),array('function', 't', 'layout/content-header.html', 33, false),)), $this); ?>

<?php if ($this->_tpl_vars['showContentFrame']): ?>
<div id="thirdLevelHeader"<?php if (! empty ( $this->_tpl_vars['aSectionNav'] )): ?> class="hasTabs"<?php endif; ?>>
  <?php if (( $this->_tpl_vars['headerModel'] && $this->_tpl_vars['headerModel']->getTitle() != '' )): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/breadcrumbs-title.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>

    <div class='corner left'></div>
    <div class='corner right'></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/section-navigation.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="thirdLevelContent">
   <div id="thirdLevelTools">
      <div id="messagePlaceholder" class='messagePlaceholder'></div>

      <ul class='contextContainer'>
          <?php if ($this->_tpl_vars['helpLink']): ?>
          <li>
              <a class='buttonLink' target='_blank' href='<?php echo ((is_array($_tmp=$this->_tpl_vars['helpLink'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'>
                  <span><?php echo OA_Admin_Template::_function_t(array('str' => 'Help'), $this);?>
</span>
              </a>
          </li>
          <?php endif; ?>
          <?php if (count($this->_tpl_vars['aTools'])): ?>
          <li class='alignRight'>
              <?php ob_start(); ?><?php echo OA_Admin_Template::_function_t(array('str' => 'Actions'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linksTitle', ob_get_contents());ob_end_clean(); ?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/links-container.html", 'smarty_include_vars' => array('aLinks' => $this->_tpl_vars['aTools'],'title' => $this->_tpl_vars['linksTitle'],'cssClass' => 'tools')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </li>
          <?php endif; ?>
          <?php if (count($this->_tpl_vars['aShortcuts'])): ?>
          <li class='alignRight'>
              <?php ob_start(); ?><?php echo OA_Admin_Template::_function_t(array('str' => 'Shortcuts'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linksTitle', ob_get_contents());ob_end_clean(); ?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/links-container.html", 'smarty_include_vars' => array('aLinks' => $this->_tpl_vars['aShortcuts'],'title' => $this->_tpl_vars['linksTitle'],'cssClass' => 'shortcuts')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </li>
          <?php endif; ?>
      </ul>
  </div>
<?php endif; ?>

<?php echo $this->_tpl_vars['breadcrumbsExtra']; ?>
