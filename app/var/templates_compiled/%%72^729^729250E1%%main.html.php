<?php /* Smarty version 2.6.18, created on 2016-02-25 21:47:34
         compiled from layout/main.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'layout/main.html', 68, false),array('insert', 'OA_Admin_UI_CustomHeader', 'layout/main.html', 83, false),array('insert', 'OA_Admin_UI_CustomFooter', 'layout/main.html', 186, false),array('function', 't', 'layout/main.html', 96, false),)), $this); ?>
<?php if ($this->_tpl_vars['uiPart'] == 'header'): ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html<?php if ($this->_tpl_vars['phpAds_TextDirection'] != 'ltr'): ?> dir="<?php echo $this->_tpl_vars['phpAds_TextDirection']; ?>
"<?php endif; ?>><head>
<title><?php echo $this->_tpl_vars['pageTitle']; ?>
</title>
<meta name="generator" content="<?php echo $this->_tpl_vars['metaGenerator']; ?>
">
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo $this->_tpl_vars['assetPath']; ?>
/images/favicon.ico" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/styles.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/scripts.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['customBranding']): ?>
<?php echo '

<style type="text/css">
'; ?>

<?php if ($this->_tpl_vars['headerForegroundColor']): ?>
<?php echo '
.brandingName {
'; ?>

    color: <?php echo $this->_tpl_vars['headerForegroundColor']; ?>
;
<?php echo '
}
'; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['headerBackgroundColor']): ?>
<?php echo '
#oaHeader {
'; ?>

    background-color: <?php echo $this->_tpl_vars['headerBackgroundColor']; ?>
;
<?php echo '
}
'; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['headerTextColor']): ?>
<?php echo '
#oaNavigationExtra, #oaNavigationExtraTop {
'; ?>

    color: <?php echo $this->_tpl_vars['headerTextColor']; ?>

<?php echo '
}
'; ?>

<?php endif; ?>
<?php echo '
</style>
'; ?>

<?php endif; ?>

<?php echo $this->_tpl_vars['jsMPE']; ?>

<?php echo $this->_tpl_vars['jsFlash']; ?>


<?php $_from = $this->_tpl_vars['aSide']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<?php if ($this->_tpl_vars['s']['top']): ?>
<link rel="top" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['s']['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['s']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['s']['up']): ?>
<link rel="up" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['s']['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['s']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['aSideShortcuts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<link rel="bookmark" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['s']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo $this->_tpl_vars['s']['name']; ?>
" />
<?php endforeach; endif; unset($_from); ?>

</head>
<body class="hasInterface <?php if ($this->_tpl_vars['showContentFrame'] || $this->_tpl_vars['showSidebar']): ?>hasGradient<?php endif; ?> <?php if ($this->_tpl_vars['showSidebar']): ?>hasSidebar<?php endif; ?> <?php if ($this->_tpl_vars['installing']): ?>installer<?php endif; ?>" onload="initPage();">


<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'OA_Admin_UI_CustomHeader')), $this); ?>


<div id="oaHeader">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/branding.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="oaNavigationExtraTop"<?php if ($this->_tpl_vars['displaySearch']): ?> class="hasSearch"<?php endif; ?>>
    <ul>

<?php if ($this->_tpl_vars['infoUser']): ?>
        <li class="infoUser"><?php echo ((is_array($_tmp=$this->_tpl_vars['infoUser'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
<?php endif; ?>

<?php if (empty ( $this->_tpl_vars['aSectionNav'] ) && $this->_tpl_vars['helpLink']): ?>
        <li class="buttonHelp"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['helpLink'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="help"><?php echo OA_Admin_Template::_function_t(array('str' => 'Help'), $this);?>
</a></li>
<?php endif; ?>

<?php if ($this->_tpl_vars['buttonSupport'] && $this->_tpl_vars['supportLink']): ?>
        <li class="buttonSupport"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['supportLink'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo OA_Admin_Template::_function_t(array('str' => 'Support'), $this);?>
</a></li>
<?php endif; ?>

<?php if ($this->_tpl_vars['buttonLogout']): ?>
        <li class="buttonLogout"><a href="<?php echo $this->_tpl_vars['adminWebPath']; ?>
logout.php"><?php echo OA_Admin_Template::_function_t(array('str' => 'Logout'), $this);?>
</a></li>
<?php endif; ?>

<?php if ($this->_tpl_vars['buttonStartOver']): ?>
        <li class="buttonStartOver"><a href="index.php"><?php echo OA_Admin_Template::_function_t(array('str' => 'StartOver'), $this);?>
</a></li>
<?php endif; ?>
    </ul>
    </div>


<?php if ($this->_tpl_vars['displaySearch']): ?>
    <div id="oaSearch">
        <form name="search" action="<?php echo $this->_tpl_vars['adminWebPath']; ?>
admin-search.php" target="SearchWindow" onsubmit="search_window(document.search.keyword.value,'<?php echo ((is_array($_tmp=$this->_tpl_vars['searchUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : smarty_modifier_escape($_tmp, 'js')); ?>
'); return false;">
            <input type="text" name="keyword" class="search" accesskey="<?php echo OA_Admin_Template::_function_t(array('key' => 'Search'), $this);?>
"><input class="submit" type="submit" value="&nbsp" >
        </form>
    </div>
<?php endif; ?>
</div>

<div id="oaNavigation">
<?php if ($this->_tpl_vars['showMainNavigation']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/navigation.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>


<?php if ($this->_tpl_vars['buttonLogout']): ?>
    <ul id="oaNavigationExtra">
        <li class="accountSwitcher">
            <div class="triggerContainer"><div class="switchTrigger"><?php echo ((is_array($_tmp=$this->_tpl_vars['accountName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div> <a href="#" accesskey="<?php echo $this->_tpl_vars['keyWorkingAs']; ?>
"><?php echo $this->_tpl_vars['strWorkingAs']; ?>
</a> </div>
            <div class="accountsPanel">
              <div class="switchTop">&nbsp;</div>
              <div class="switchMiddle">
                <div class="switchMiddleBody">
	                <div class="label">
                      <?php echo OA_Admin_Template::_function_t(array('key' => 'SwitchTo'), $this);?>

                      <?php if ($this->_tpl_vars['showSearchAndRecent']): ?><input id="accountSearch" type="text" />
                        <span id="accountSearchIcon">&nbsp;</span>
                      <?php endif; ?>
                    </div>
                    <div id="accountLoading"></div>
	                <div class="result">
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "account-switch-search.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	                </div>
                </div>
              </div>
              <div class="switchDown">&nbsp;</div>
            </div>
        </li>
    </ul>
<?php endif; ?>
<?php if ($this->_tpl_vars['buttonLogout']): ?>
    <script type='text/javascript'>
    <?php echo '
      <!--
      $(document).ready(function() {
    '; ?>

        initAccoutSwitcher("<?php echo $this->_tpl_vars['accountSearchUrl']; ?>
");
    <?php echo '
      });
      -->
    '; ?>

    </script>
    <div class='accountSwitcherOverlay'>&nbsp;</div>
<?php endif; ?>
</div>

<div id="firstLevelContent">
<?php if ($this->_tpl_vars['showSidebar']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/sidebar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>


<div id="secondLevelContent">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/content-header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<?php else: ?>


<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'OA_Admin_UI_CustomFooter')), $this); ?>


  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/content-footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>

<?php if ($this->_tpl_vars['jsMPE']): ?>
  <div id="runMpe" name="runMpe">&#160;</div>
  <script type="text/javascript">
  <!--
      xajax_OA_runMPE();
  //-->
  </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['productUpdatesCheck']): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['adminWebPath']; ?>
maintenance-updates-js.php"></script>
<?php endif; ?>

<?php if ($this->_tpl_vars['maintenanceAlert']): ?>
<script type='text/javascript'>
<!--
    alert('<?php echo OA_Admin_Template::_function_t(array('str' => 'MaintenanceNotActive','escape' => 'javascript'), $this);?>
');
    location.replace('<?php echo $this->_tpl_vars['adminWebPath']; ?>
maintenance-maintenance.php');
//-->
</script>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/messages.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
<?php endif; ?>