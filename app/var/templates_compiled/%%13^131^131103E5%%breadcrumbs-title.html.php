<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from layout/breadcrumbs-title.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'layout/breadcrumbs-title.html', 15, false),array('modifier', 'escape', 'layout/breadcrumbs-title.html', 20, false),)), $this); ?>

<?php if ($this->_tpl_vars['headerModel'] && $this->_tpl_vars['headerModel']->getTitle() != ''): ?>
    <?php $this->assign('breadcrumbs', $this->_tpl_vars['headerModel']->getEntityBreadcrumbs()); ?>
    <?php $this->assign('breadcrumbCount', count($this->_tpl_vars['breadcrumbs'])); ?>

    <div class="breadcrumb <?php if ($this->_tpl_vars['headerModel']->getIconClass()): ?>hasIcon <?php echo $this->_tpl_vars['headerModel']->getIconClass(); ?>
<?php endif; ?>">
        <h3 <?php if ($this->_tpl_vars['breadcrumbCount'] == 0): ?>class="noBreadcrumb"<?php endif; ?>>
            <span class='label'><?php echo $this->_tpl_vars['headerModel']->getTitle(); ?>
</span><?php if ($this->_tpl_vars['headerModel']->getPageType() == 'edit'): ?>:<?php endif; ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['headerModel']->getEntityName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php if ($this->_tpl_vars['headerModel']->getNewTargetName()): ?>
                <span class='target'>
                    <?php echo $this->_tpl_vars['headerModel']->getNewTargetTitle(); ?>

                    <?php if ($this->_tpl_vars['headerModel']->getNewTargetLink()): ?><a href="<?php echo $this->_tpl_vars['headerModel']->getNewTargetLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['headerModel']->getNewTargetName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php endif; ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['headerModel']->getNewTargetName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php if ($this->_tpl_vars['headerModel']->getNewTargetLink()): ?></a><?php endif; ?>
                </span>
            <?php endif; ?>
        </h3>

        <?php if (! $this->_tpl_vars['hideNavigator'] && $this->_tpl_vars['headerModel']->hasEntityList()): ?>
        <div class='dropDown entityList'>
            <span>
                <span>
                    <ul>
                    <?php unset($this->_sections['breadcrumbIndex']);
$this->_sections['breadcrumbIndex']['name'] = 'breadcrumbIndex';
$this->_sections['breadcrumbIndex']['loop'] = is_array($_loop=$this->_tpl_vars['breadcrumbs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['breadcrumbIndex']['show'] = true;
$this->_sections['breadcrumbIndex']['max'] = $this->_sections['breadcrumbIndex']['loop'];
$this->_sections['breadcrumbIndex']['step'] = 1;
$this->_sections['breadcrumbIndex']['start'] = $this->_sections['breadcrumbIndex']['step'] > 0 ? 0 : $this->_sections['breadcrumbIndex']['loop']-1;
if ($this->_sections['breadcrumbIndex']['show']) {
    $this->_sections['breadcrumbIndex']['total'] = $this->_sections['breadcrumbIndex']['loop'];
    if ($this->_sections['breadcrumbIndex']['total'] == 0)
        $this->_sections['breadcrumbIndex']['show'] = false;
} else
    $this->_sections['breadcrumbIndex']['total'] = 0;
if ($this->_sections['breadcrumbIndex']['show']):

            for ($this->_sections['breadcrumbIndex']['index'] = $this->_sections['breadcrumbIndex']['start'], $this->_sections['breadcrumbIndex']['iteration'] = 1;
                 $this->_sections['breadcrumbIndex']['iteration'] <= $this->_sections['breadcrumbIndex']['total'];
                 $this->_sections['breadcrumbIndex']['index'] += $this->_sections['breadcrumbIndex']['step'], $this->_sections['breadcrumbIndex']['iteration']++):
$this->_sections['breadcrumbIndex']['rownum'] = $this->_sections['breadcrumbIndex']['iteration'];
$this->_sections['breadcrumbIndex']['index_prev'] = $this->_sections['breadcrumbIndex']['index'] - $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['index_next'] = $this->_sections['breadcrumbIndex']['index'] + $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['first']      = ($this->_sections['breadcrumbIndex']['iteration'] == 1);
$this->_sections['breadcrumbIndex']['last']       = ($this->_sections['breadcrumbIndex']['iteration'] == $this->_sections['breadcrumbIndex']['total']);
?>
                        <li class="ent inlineIcon <?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getCssClass(); ?>
"><?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityLabel(); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
                        <?php if ($this->_sections['breadcrumbIndex']['index'] < $this->_tpl_vars['breadcrumbCount'] - 1): ?>
                        <li class='sep'>&gt;</li>
                        <?php endif; ?>
                    <?php endfor; endif; ?>
                    </ul>
                </span>
            </span>
            <div class='panel'><div></div></div>
            <div class='mask'></div>
        </div>

        <script type='text/javascript'><?php echo '
        <!--

          var entityList = [
            '; ?>
<?php unset($this->_sections['breadcrumbIndex']);
$this->_sections['breadcrumbIndex']['name'] = 'breadcrumbIndex';
$this->_sections['breadcrumbIndex']['loop'] = is_array($_loop=$this->_tpl_vars['breadcrumbs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['breadcrumbIndex']['show'] = true;
$this->_sections['breadcrumbIndex']['max'] = $this->_sections['breadcrumbIndex']['loop'];
$this->_sections['breadcrumbIndex']['step'] = 1;
$this->_sections['breadcrumbIndex']['start'] = $this->_sections['breadcrumbIndex']['step'] > 0 ? 0 : $this->_sections['breadcrumbIndex']['loop']-1;
if ($this->_sections['breadcrumbIndex']['show']) {
    $this->_sections['breadcrumbIndex']['total'] = $this->_sections['breadcrumbIndex']['loop'];
    if ($this->_sections['breadcrumbIndex']['total'] == 0)
        $this->_sections['breadcrumbIndex']['show'] = false;
} else
    $this->_sections['breadcrumbIndex']['total'] = 0;
if ($this->_sections['breadcrumbIndex']['show']):

            for ($this->_sections['breadcrumbIndex']['index'] = $this->_sections['breadcrumbIndex']['start'], $this->_sections['breadcrumbIndex']['iteration'] = 1;
                 $this->_sections['breadcrumbIndex']['iteration'] <= $this->_sections['breadcrumbIndex']['total'];
                 $this->_sections['breadcrumbIndex']['index'] += $this->_sections['breadcrumbIndex']['step'], $this->_sections['breadcrumbIndex']['iteration']++):
$this->_sections['breadcrumbIndex']['rownum'] = $this->_sections['breadcrumbIndex']['iteration'];
$this->_sections['breadcrumbIndex']['index_prev'] = $this->_sections['breadcrumbIndex']['index'] - $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['index_next'] = $this->_sections['breadcrumbIndex']['index'] + $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['first']      = ($this->_sections['breadcrumbIndex']['iteration'] == 1);
$this->_sections['breadcrumbIndex']['last']       = ($this->_sections['breadcrumbIndex']['iteration'] == $this->_sections['breadcrumbIndex']['total']);
?><?php echo '
              {
                \'label\': \''; ?>
<?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityLabel(); ?>
<?php echo '\',
                \'name\': \''; ?>
<?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getHtmlName(); ?>
<?php echo '\',
                \'className\': \''; ?>
<?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getCssClass(); ?>
<?php echo '\',
                \'id\': \''; ?>
<?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityId(); ?>
<?php echo '\'
              }'; ?>
<?php if ($this->_sections['breadcrumbIndex']['index'] < $this->_tpl_vars['breadcrumbCount'] - 1): ?>,<?php endif; ?><?php echo '
            '; ?>
<?php endfor; endif; ?><?php echo '
          ];


          var itemTree = {};

          '; ?>

              <?php unset($this->_sections['breadcrumbIndex']);
$this->_sections['breadcrumbIndex']['name'] = 'breadcrumbIndex';
$this->_sections['breadcrumbIndex']['loop'] = is_array($_loop=$this->_tpl_vars['breadcrumbs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['breadcrumbIndex']['show'] = true;
$this->_sections['breadcrumbIndex']['max'] = $this->_sections['breadcrumbIndex']['loop'];
$this->_sections['breadcrumbIndex']['step'] = 1;
$this->_sections['breadcrumbIndex']['start'] = $this->_sections['breadcrumbIndex']['step'] > 0 ? 0 : $this->_sections['breadcrumbIndex']['loop']-1;
if ($this->_sections['breadcrumbIndex']['show']) {
    $this->_sections['breadcrumbIndex']['total'] = $this->_sections['breadcrumbIndex']['loop'];
    if ($this->_sections['breadcrumbIndex']['total'] == 0)
        $this->_sections['breadcrumbIndex']['show'] = false;
} else
    $this->_sections['breadcrumbIndex']['total'] = 0;
if ($this->_sections['breadcrumbIndex']['show']):

            for ($this->_sections['breadcrumbIndex']['index'] = $this->_sections['breadcrumbIndex']['start'], $this->_sections['breadcrumbIndex']['iteration'] = 1;
                 $this->_sections['breadcrumbIndex']['iteration'] <= $this->_sections['breadcrumbIndex']['total'];
                 $this->_sections['breadcrumbIndex']['index'] += $this->_sections['breadcrumbIndex']['step'], $this->_sections['breadcrumbIndex']['iteration']++):
$this->_sections['breadcrumbIndex']['rownum'] = $this->_sections['breadcrumbIndex']['iteration'];
$this->_sections['breadcrumbIndex']['index_prev'] = $this->_sections['breadcrumbIndex']['index'] - $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['index_next'] = $this->_sections['breadcrumbIndex']['index'] + $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['first']      = ($this->_sections['breadcrumbIndex']['iteration'] == 1);
$this->_sections['breadcrumbIndex']['last']       = ($this->_sections['breadcrumbIndex']['iteration'] == $this->_sections['breadcrumbIndex']['total']);
?>
              <?php $this->assign('idx', 0); ?>
          <?php echo '

          itemTree'; ?>
<?php echo $this->_smarty_vars['capture']['ids']; ?>
<?php echo ' = {
                  '; ?>
<?php $_from = $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityMap(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['itemId'] => $this->_tpl_vars['aEntity']):
        $this->_foreach['items']['iteration']++;
?><?php echo '
              			'; ?>
<?php echo $this->_tpl_vars['itemId']; ?>
<?php echo ':     {
                      \'name\': \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['aEntity']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo '\', \'idx\': \''; ?>
<?php echo $this->_tpl_vars['idx']++; ?>
<?php echo '\'
                    }'; ?>
<?php if (($this->_foreach['items']['iteration'] == $this->_foreach['items']['total']) == false): ?>,<?php endif; ?><?php echo '
                  '; ?>
<?php endforeach; endif; unset($_from); ?><?php echo '
          };

          '; ?>

              <?php ob_start(); ?><?php if ($this->_smarty_vars['capture']['ids']): ?><?php echo $this->_smarty_vars['capture']['ids']; ?>
<?php endif; ?>[<?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityId(); ?>
]['items']<?php $this->_smarty_vars['capture']['ids'] = ob_get_contents(); ob_end_clean(); ?>
              <?php endfor; endif; ?>
          <?php echo '


          $(\'.entityList\').activateNavigator(entityList, itemTree);


        //-->
        '; ?>
</script>
        <?php else: ?>
            <?php if (count($this->_tpl_vars['breadcrumbs']) > 0): ?>
            <span class="entityLinks">
            <?php unset($this->_sections['breadcrumbIndex']);
$this->_sections['breadcrumbIndex']['name'] = 'breadcrumbIndex';
$this->_sections['breadcrumbIndex']['loop'] = is_array($_loop=$this->_tpl_vars['breadcrumbs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['breadcrumbIndex']['show'] = true;
$this->_sections['breadcrumbIndex']['max'] = $this->_sections['breadcrumbIndex']['loop'];
$this->_sections['breadcrumbIndex']['step'] = 1;
$this->_sections['breadcrumbIndex']['start'] = $this->_sections['breadcrumbIndex']['step'] > 0 ? 0 : $this->_sections['breadcrumbIndex']['loop']-1;
if ($this->_sections['breadcrumbIndex']['show']) {
    $this->_sections['breadcrumbIndex']['total'] = $this->_sections['breadcrumbIndex']['loop'];
    if ($this->_sections['breadcrumbIndex']['total'] == 0)
        $this->_sections['breadcrumbIndex']['show'] = false;
} else
    $this->_sections['breadcrumbIndex']['total'] = 0;
if ($this->_sections['breadcrumbIndex']['show']):

            for ($this->_sections['breadcrumbIndex']['index'] = $this->_sections['breadcrumbIndex']['start'], $this->_sections['breadcrumbIndex']['iteration'] = 1;
                 $this->_sections['breadcrumbIndex']['iteration'] <= $this->_sections['breadcrumbIndex']['total'];
                 $this->_sections['breadcrumbIndex']['index'] += $this->_sections['breadcrumbIndex']['step'], $this->_sections['breadcrumbIndex']['iteration']++):
$this->_sections['breadcrumbIndex']['rownum'] = $this->_sections['breadcrumbIndex']['iteration'];
$this->_sections['breadcrumbIndex']['index_prev'] = $this->_sections['breadcrumbIndex']['index'] - $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['index_next'] = $this->_sections['breadcrumbIndex']['index'] + $this->_sections['breadcrumbIndex']['step'];
$this->_sections['breadcrumbIndex']['first']      = ($this->_sections['breadcrumbIndex']['iteration'] == 1);
$this->_sections['breadcrumbIndex']['last']       = ($this->_sections['breadcrumbIndex']['iteration'] == $this->_sections['breadcrumbIndex']['total']);
?>
                <?php if ($this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getUrl()): ?>
                    <a href="<?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getUrl(); ?>
" class="ent inlineIcon <?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getCssClass(); ?>
"><?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityLabel(); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                <?php else: ?>
                    <span class="ent inlineIcon <?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getCssClass(); ?>
"><?php echo $this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityLabel(); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['breadcrumbs'][$this->_sections['breadcrumbIndex']['index']]->getEntityName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
                <?php endif; ?>

                <?php if ($this->_sections['breadcrumbIndex']['index'] < $this->_tpl_vars['breadcrumbCount'] - 1): ?>
                    <span class='sep'>&gt;</span>
                <?php endif; ?>
            <?php endfor; endif; ?>
            </span>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
